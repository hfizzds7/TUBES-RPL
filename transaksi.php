<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Include the database connection file
    // Replace with your actual database connection file
    // For example: include 'db_connect.php';
    // This is a placeholder for demonstration.
    
    $servername = "localhost";
    $username = "root";
    $password = ""; // Ganti dengan password database Anda jika ada
    $dbname = "sajione";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get the data from the POST request
    $cart = json_decode($_POST['cart_data'], true);
    $table_number = $_POST['table_number']; // Assuming you'll pass this from JavaScript
    $payment_method = $_POST['payment_method']; // Assuming you'll pass this too

    // Begin a transaction to ensure data integrity
    $conn->begin_transaction();
    
    try {
        // First, handle the table status update (optional, but good practice)
        // Find the id_meja based on the table number
        $stmt_meja = $conn->prepare("SELECT id_meja FROM meja WHERE nomor_meja = ?");
        $stmt_meja->bind_param("i", $table_number);
        $stmt_meja->execute();
        $result_meja = $stmt_meja->get_result();
        $meja_row = $result_meja->fetch_assoc();
        $id_meja = $meja_row['id_meja'];

        // Update the table status to 'Kosong' after payment
        $stmt_update_meja = $conn->prepare("UPDATE meja SET status_meja = 'Kosong' WHERE id_meja = ?");
        $stmt_update_meja->bind_param("i", $id_meja);
        $stmt_update_meja->execute();


        // Loop through each item in the consolidated cart and insert into 'pesanan' table
        foreach ($cart as $item) {
            $id_menu = $item['id_menu'];
            $jumlah = $item['quantity'];
            $catatan = $item['notes'];

            // SQL query to insert a new record into the 'pesanan' table
            $sql = "INSERT INTO pesanan (id_meja, id_menu, jumlah, catatan) VALUES (?, ?, ?, ?)";
            
            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiis", $id_meja, $id_menu, $jumlah, $catatan);

            if (!$stmt->execute()) {
                throw new Exception("Error inserting record: " . $stmt->error);
            }
            $stmt->close();
        }

        // Commit the transaction
        $conn->commit();

        // Send a success response back to the JavaScript
        echo json_encode(["status" => "success", "message" => "Order successfully placed and paid!"]);

    } catch (Exception $e) {
        // Rollback the transaction on error
        $conn->rollback();
        // Send an error response
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }

    $conn->close();

} else {
    // If the request is not a POST request, return an error
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Transaksi - Sajione Restaurant</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/modal.css" rel="stylesheet" />
    <style>
        .cart-item {
            margin-bottom: 1rem;
            padding: 1rem;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            margin-right: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="page-more-menu">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php" style="font-family: 'Gorditas', cursive;">Sajione Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a href="index.php" class="nav-link">Main Page</a></li>
                    <li class="nav-item"><a href="menu_makanan.php" class="nav-link">Menu</a></li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-dark" href="cart.php">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill" id="cart-count">0</span>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <header class="bg-saya py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Pembayaran</h1>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3>Detail Pesanan</h3>
                    <div id="transaction-items" class="list-group">
                        </div>
                    <div class="mt-4 text-end">
                        <h4 id="transaction-total">Total: Rp. 0</h4>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3>Metode Pembayaran</h3>
                    <div class="card p-4">
                        <form id="payment-form">
                            <div class="mb-3">
                                <label for="paymentMethod" class="form-label">Metode Pembayaran</label>
                                <select class="form-select" id="paymentMethod">
                                    <option value="tunai">Tunai</option>
                                    <option value="nontunai">Non-Tunai</option>
                                </select>
                            </div>
                            <div class="mb-3" id="cash-input-group">
                                <label for="cashAmount" class="form-label">Uang Bayar</label>
                                <input type="number" class="form-control" id="cashAmount" placeholder="Masukkan jumlah uang" min="0">
                            </div>
                            <div id="payment-alert" class="alert d-none" role="alert"></div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success btn-lg">Bayar</button>
                            </div>
                            <div class="mt-3 text-end" id="return-amount-div" style="display: none;">
                                <h4>Kembalian: <span id="return-amount">Rp. 0</span></h4>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5" style="background-color: #ffc800;">
        <div class="container"><p class="m-0 text-center text-brown">Sajione Restaurant 2025</p></div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const transactionItemsContainer = document.getElementById('transaction-items');
            const transactionTotalElement = document.getElementById('transaction-total');
            const paymentForm = document.getElementById('payment-form');
            const paymentMethodSelect = document.getElementById('paymentMethod');
            const cashInputGroup = document.getElementById('cash-input-group');
            const cashAmountInput = document.getElementById('cashAmount');
            const paymentAlert = document.getElementById('payment-alert');
            const returnAmountDiv = document.getElementById('return-amount-div');
            const returnAmountElement = document.getElementById('return-amount');
            const cartCountElement = document.getElementById('cart-count');

            let totalHarga = 0;

            function renderTransactionDetails() {
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                totalHarga = 0;
                transactionItemsContainer.innerHTML = '';

                // Menggabungkan item yang sama berdasarkan nama menu
                const consolidatedCart = new Map();

                cart.forEach(item => {
                    const itemName = item.name;

                    if (consolidatedCart.has(itemName)) {
                        const existingItem = consolidatedCart.get(itemName);
                        existingItem.quantity += item.quantity;
                        existingItem.totalPrice += item.totalPrice;
                        // Menggabungkan catatan dan nomor meja
                        existingItem.notes = existingItem.notes ? `${existingItem.notes}, ${item.notes}` : item.notes;
                        existingItem.tableNumber = existingItem.tableNumber ? `${existingItem.tableNumber}, ${item.tableNumber}` : item.tableNumber;
                    } else {
                        consolidatedCart.set(itemName, { ...item });
                    }
                });

                const consolidatedCartArray = Array.from(consolidatedCart.values());

                if (consolidatedCartArray.length === 0) {
                    transactionItemsContainer.innerHTML = '<p class="text-center text-muted">Keranjang Anda kosong.</p>';
                    paymentForm.querySelector('button[type="submit"]').disabled = true;
                } else {
                    consolidatedCartArray.forEach(item => {
                        totalHarga += item.totalPrice;
                        const transactionItemElement = document.createElement('div');
                        transactionItemElement.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center', 'cart-item');
                        
                        const notesInfo = item.notes ? `<small class="d-block text-muted">Keterangan: ${item.notes}</small>` : '';
                        const tableInfo = item.tableNumber ? `<small class="d-block text-muted">Nomor Meja: ${item.tableNumber}</small>` : '';

                        transactionItemElement.innerHTML = `
                            <div class="d-flex align-items-center">
                                <img src="${item.image}" alt="${item.name}">
                                <div>
                                    <h5 class="mb-1">${item.name}</h5>
                                    <p class="mb-1">Jumlah: ${item.quantity}</p>
                                    ${notesInfo}
                                    ${tableInfo}
                                </div>
                            </div>
                            <div class="text-end">
                                <span>Rp. ${item.totalPrice.toLocaleString('id-ID')}</span>
                            </div>
                        `;
                        transactionItemsContainer.appendChild(transactionItemElement);
                    });
                    paymentForm.querySelector('button[type="submit"]').disabled = false;
                }
                
                transactionTotalElement.textContent = `Total: Rp. ${totalHarga.toLocaleString('id-ID')}`;
                cartCountElement.textContent = consolidatedCartArray.length; // Memperbarui jumlah item di nav
            }

            paymentMethodSelect.addEventListener('change', function() {
                if (paymentMethodSelect.value === 'tunai') {
                    cashInputGroup.style.display = 'block';
                } else {
                    cashInputGroup.style.display = 'none';
                }
                // Reset alert dan kembalian
                paymentAlert.classList.add('d-none');
                returnAmountDiv.style.display = 'none';
            });

            paymentForm.addEventListener('submit', function(event) {
                event.preventDefault();
                paymentAlert.classList.add('d-none');
                returnAmountDiv.style.display = 'none';
                
                const metodePembayaran = paymentMethodSelect.value;
                let pembayaranBerhasil = false;

                if (metodePembayaran === 'tunai') {
                    const uangBayar = parseInt(cashAmountInput.value);
                    if (isNaN(uangBayar) || uangBayar < totalHarga) {
                        paymentAlert.textContent = 'Jumlah uang yang dibayarkan tidak mencukupi atau anda belum memasukkan jumlah uang.';
                        paymentAlert.classList.remove('d-none', 'alert-success');
                        paymentAlert.classList.add('alert-danger');
                    } else {
                        const kembalian = uangBayar - totalHarga;
                        pembayaranBerhasil = true;
                        paymentAlert.textContent = 'Pesanan berhasil dibuat!';
                        paymentAlert.classList.remove('d-none', 'alert-danger');
                        paymentAlert.classList.add('alert-success');
                        returnAmountDiv.style.display = 'block';
                        returnAmountElement.textContent = `Rp. ${kembalian.toLocaleString('id-ID')}`;
                        
                        // Setelah pembayaran berhasil, hapus keranjang dan perbarui tampilan
                        localStorage.removeItem('cart');
                        localStorage.removeItem('cart-total');
                        renderTransactionDetails(); // Memanggil ulang fungsi untuk menampilkan keranjang kosong
                    }
                } else if (metodePembayaran === 'nontunai') {
                    pembayaranBerhasil = true;
                    paymentAlert.textContent = 'Pesanan berhasil dibuat! Pembayaran non-tunai berhasil.';
                    paymentAlert.classList.remove('d-none', 'alert-danger');
                    paymentAlert.classList.add('alert-success');
                    
                    // Setelah pembayaran berhasil, hapus keranjang dan perbarui tampilan
                    localStorage.removeItem('cart');
                    localStorage.removeItem('cart-total');
                    renderTransactionDetails(); // Memanggil ulang fungsi untuk menampilkan keranjang kosong
                }
            });

            renderTransactionDetails();
        });
    </script>
</body>
</html>