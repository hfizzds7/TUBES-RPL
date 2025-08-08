<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = ""; // Replace with your actual database password
    $dbname = "sajione";

    // Create a new MySQLi connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get the data from the POST request
    $cart = json_decode($_POST['cart_data'], true);
    $table_number = $_POST['table_number']; 

    // Begin a database transaction to ensure all inserts are successful
    $conn->begin_transaction();
    
    try {
        // Find the `id_meja` from the `meja` table using the `nomor_meja`
        $stmt_meja = $conn->prepare("SELECT id_meja FROM meja WHERE nomor_meja = ?");
        $stmt_meja->bind_param("i", $table_number);
        $stmt_meja->execute();
        $result_meja = $stmt_meja->get_result();
        $meja_row = $result_meja->fetch_assoc();

        if (!$meja_row) {
            throw new Exception("Nomor meja tidak ditemukan.");
        }
        $id_meja = $meja_row['id_meja'];
        $stmt_meja->close();

        // Loop through each item in the cart and insert into the `pesanan` table
        foreach ($cart as $item) {
            $id_menu = $item['id_menu'];
            $jumlah = $item['quantity'];
            $catatan = $item['notes'];

            // Prepare an SQL statement to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO pesanan (id_meja, id_menu, jumlah, catatan) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("iiis", $id_meja, $id_menu, $jumlah, $catatan);

            if (!$stmt->execute()) {
                throw new Exception("Error inserting record: " . $stmt->error);
            }
            $stmt->close();
        }

        // If all insertions are successful, commit the transaction
        $conn->commit();

        // Send a JSON success response
        echo json_encode(["status" => "success", "message" => "Pesanan berhasil diproses dan disimpan."]);

    } catch (Exception $e) {
        // If an error occurs, rollback the transaction
        $conn->rollback();
        // Send a JSON error response
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }

    $conn->close();

} else {
    // Return an error for invalid request methods
    echo json_encode(["status" => "error", "message" => "Metode request tidak valid."]);
}

?>