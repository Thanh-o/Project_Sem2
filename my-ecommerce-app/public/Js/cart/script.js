document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.qty button').forEach(button => {
        button.addEventListener('click', (event) => {
            const action = event.target.dataset.action;
            const cartItem = event.target.closest('.cart-item');
            const quantityInput = cartItem.querySelector('.quantity-input');
            let quantity = parseInt(quantityInput.value);

            if (action === 'increase') {
                quantity++;
            } else if (action === 'decrease' && quantity > 1) {
                quantity--;
            }

            updateCartQuantity(cartItem.dataset.cartId, quantity);
        });
    });

    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', (event) => {
            const cartItem = event.target.closest('.cart-item');
            let quantity = parseInt(event.target.value);

            if (quantity < 1) {
                quantity = 1;
                event.target.value = quantity;
            }

            updateCartQuantity(cartItem.dataset.cartId, quantity);
        });
    });

    function updateCartQuantity(cartId, quantity) {
        fetch(`/cart/${cartId}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ quantity: quantity })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Quantity updated successfully');
                const cartItem = document.querySelector(`.cart-item[data-cart-id="${cartId}"]`);
                const unitPriceElement = cartItem.querySelector('.unit-price');
                const price = parseFloat(cartItem.querySelector('.price').dataset.price);
                unitPriceElement.textContent = `$${(price * quantity).toFixed(2)}`;
            } else {
                console.error('Error updating quantity');
            }
        });
    }
});