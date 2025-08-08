document.addEventListener('DOMContentLoaded', function () {
    var orderModal = document.getElementById('orderModal');
    var addOrderButton = document.getElementById('addOrderButton');
    var alertMessage = document.getElementById('alertMessage');
    var orderQuantityInput = document.getElementById('orderQuantity');
    var menuPriceInput = document.getElementById('menuPrice');
    var originalPriceInput = document.createElement('input');
    originalPriceInput.type = 'hidden';
    orderModal.querySelector('#orderForm').appendChild(originalPriceInput);

    function updateCartCount() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        document.getElementById('cart-count').textContent = cart.length;
    }

    orderModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var menuName = button.getAttribute('data-menu');
        var menuPrice = parseFloat(button.getAttribute('data-price'));
        var menuImage = button.getAttribute('data-image');

        var modalTitle = orderModal.querySelector('.modal-title');
        var menuNameInput = orderModal.querySelector('#menuName');
        var modalImage = orderModal.querySelector('#modal-image');

        modalTitle.textContent = 'Tambah ke Keranjang';
        menuNameInput.value = menuName;
        originalPriceInput.value = menuPrice;
        modalImage.src = menuImage;

        orderQuantityInput.value = 1;
        orderModal.querySelector('#orderNotes').value = '';
        alertMessage.classList.add('d-none');
        
        // Update harga saat modal dibuka
        updatePriceDisplay();
    });

    orderQuantityInput.addEventListener('input', function() {
        updatePriceDisplay();
    });

    function updatePriceDisplay() {
        let originalPrice = parseFloat(originalPriceInput.value);
        let quantity = parseInt(orderQuantityInput.value);
        if (isNaN(quantity) || quantity < 1) {
            quantity = 1;
        }
        let totalPrice = originalPrice * quantity;
        menuPriceInput.value = `Rp. ${totalPrice.toLocaleString('id-ID')}`;
    }

    addOrderButton.addEventListener('click', function() {
        var menuName = orderModal.querySelector('#menuName').value;
        var originalPrice = parseFloat(originalPriceInput.value);
        var orderQuantity = parseInt(orderQuantityInput.value);
        var orderNotes = orderModal.querySelector('#orderNotes').value;
        var menuImage = orderModal.querySelector('#modal-image').src;
        var totalPrice = originalPrice * orderQuantity;

        if (menuName === '' || isNaN(originalPrice) || isNaN(orderQuantity) || orderQuantity <= 0) {
            alertMessage.classList.remove('d-none');
        } else {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push({
                name: menuName,
                price: originalPrice,
                quantity: orderQuantity,
                notes: orderNotes,
                image: menuImage,
                totalPrice: totalPrice
            });

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();

            alertMessage.classList.add('d-none');
            var modal = bootstrap.Modal.getInstance(orderModal);
            modal.hide();
        }
    });

    updateCartCount();
});