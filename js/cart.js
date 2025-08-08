document.addEventListener('DOMContentLoaded', function () {
    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');

    function renderCart() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let total = 0;
        cartItemsContainer.innerHTML = '';

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p class="text-center text-muted">Keranjang Anda kosong.</p>';
        } else {
            cart.forEach((item, index) => {
                total += item.totalPrice;
                const cartItemElement = document.createElement('div');
                cartItemElement.classList.add('list-group-item', 'd-flex', 'justify-content-between', 'align-items-center');
                cartItemElement.innerHTML = `
                    <div class="d-flex align-items-center">
                        <img src="${item.image}" alt="${item.name}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px; margin-right: 1rem;">
                        <div>
                            <h5 class="mb-1">${item.name}</h5>
                            <p class="mb-1">Jumlah: ${item.quantity}</p>
                            <small class="text-muted">Keterangan: ${item.notes || '-'}</small>
                        </div>
                    </div>
                    <span>Rp. ${item.totalPrice.toLocaleString('id-ID')}</span>
                `;
                cartItemsContainer.appendChild(cartItemElement);
            });
        }
        cartTotalElement.textContent = `Total: Rp. ${total.toLocaleString('id-ID')}`;
        updateCartCount();
    }

    function updateCartCount() {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartCountElements = document.querySelectorAll('#cart-count');
        cartCountElements.forEach(element => {
            element.textContent = cart.length;
        });
    }

    renderCart();
});