<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Keranjang Belanja - Sajione Restaurant</title>
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
                    <h1 class="display-4 fw-bolder">Keranjang Belanja</h1>
                </div>
            </div>
        </header>

        <section class="py-5">
            <div class="container px-4 px-lg-5">
                <div class="row">
                    <div class="col-12">
                        <div id="cart-items" class="list-group">
                            </div>
                        <div class="mt-4 text-end">
                            <h4 id="cart-total">Total: Rp. 0</h4>
                        </div>
                        <div class="mt-3 text-end">
                            <button class="btn btn-primary btn-lg" id="checkout-button">BUAT PESANAN</button>
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
            const cartItemsContainer = document.getElementById('cart-items');
            const cartTotalElement = document.getElementById('cart-total');
            const cartCountElement = document.getElementById('cart-count');
            const checkoutButton = document.getElementById('checkout-button');

            function renderCart() {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                let total = 0;
                cartItemsContainer.innerHTML = '';
                
                // Menggabungkan item yang sama hanya berdasarkan nama menu
                const consolidatedCart = new Map();

                cart.forEach(item => {
                    const itemName = item.name;

                    if (consolidatedCart.has(itemName)) {
                        // Jika item dengan nama yang sama sudah ada, perbarui kuantitas dan total harga
                        const existingItem = consolidatedCart.get(itemName);
                        existingItem.quantity += item.quantity;
                        existingItem.totalPrice += item.totalPrice;
                    } else {
                        // Jika belum ada, tambahkan sebagai item baru ke map
                        consolidatedCart.set(itemName, { ...item });
                    }
                });

                const consolidatedCartArray = Array.from(consolidatedCart.values());

                if (consolidatedCartArray.length === 0) {
                    cartItemsContainer.innerHTML = '<p class="text-center text-muted">Keranjang Anda kosong.</p>';
                    checkoutButton.disabled = true;
                } else {
                    consolidatedCartArray.forEach(item => {
                        total += item.totalPrice;
                        const cartItemElement = document.createElement('div');
                        cartItemElement.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center', 'cart-item');
                        
                        // Mendapatkan semua catatan dan nomor meja dari pesanan asli untuk ditampilkan
                        const allNotes = cart
                            .filter(cartItem => cartItem.name === item.name && cartItem.notes)
                            .map(cartItem => cartItem.notes)
                            .join(', ');
                        
                        const allTableNumbers = cart
                            .filter(cartItem => cartItem.name === item.name && cartItem.tableNumber)
                            .map(cartItem => cartItem.tableNumber)
                            .join(', ');

                        const notesInfo = allNotes ? `<small class="d-block text-muted">Keterangan: ${allNotes}</small>` : '';
                        const tableInfo = allTableNumbers ? `<small class="d-block text-muted">Nomor Meja: ${allTableNumbers}</small>` : '';

                        cartItemElement.innerHTML = `
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
                        cartItemsContainer.appendChild(cartItemElement);
                    });
                    checkoutButton.disabled = false;
                }
                
                cartTotalElement.textContent = `Total: Rp. ${total.toLocaleString('id-ID')}`;
                cartCountElement.textContent = consolidatedCartArray.length;
                localStorage.setItem('cart-total', total); 
            }

            checkoutButton.addEventListener('click', function() {
                window.location.href = 'transaksi.php';
            });

            renderCart();
        });
        </script>
    </body>
</html>