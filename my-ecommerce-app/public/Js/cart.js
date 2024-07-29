document.addEventListener('DOMContentLoaded', function () {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    function updateCartTotal() {
        let totalQuantity = 0;
        let totalPrice = 0;
        document.querySelectorAll('.cart-item').forEach(cartItem => {
            let quantity = parseInt(cartItem.querySelector('.quantity-input').value);
            let price = parseFloat(cartItem.querySelector('.price').getAttribute('data-price'));
            totalQuantity += quantity;
            totalPrice += quantity * price;
        });
        document.querySelector('.totalQuantity').textContent = totalQuantity;
        document.querySelector('.totalPrice').textContent = `$${totalPrice.toFixed(0)}`;
    }

    function handleQuantityChange(button) {
        let action = button.getAttribute('data-action');
        let productId = button.getAttribute('data-product-id');
        let quantityInput = button.parentElement.querySelector('.quantity-input');
        let currentQuantity = parseInt(quantityInput.value);
        let price = parseFloat(button.closest('.cart-item').querySelector('.price').getAttribute('data-price'));

        if (action === 'decrease' && currentQuantity > 1) {
            currentQuantity--;
        } else if (action === 'increase') {
            currentQuantity++;
        }

        quantityInput.value = currentQuantity;
        button.closest('.cart-item').querySelector('.unit-price').textContent = `$${(currentQuantity * price).toFixed(0)}`;

        fetch(`/cart/update/${productId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ quantity: currentQuantity })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  updateCartTotal();
              }
          });
    }

    function removeCartItem(cartItemId, url) {
        fetch(url, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ cart_id: cartItemId })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  document.querySelector(`.cart-item[data-cart-id="${cartItemId}"]`).remove();
                  updateCartTotal();
              } else {
                  console.error('Error removing product:', data.message);
                  alert('An error occurred while deleting the product.');
              }
          }).catch(error => {
              console.error('Error:', error);
              alert('An error occurred while connecting to the server.');
          });
    }

    function addCartItem(cartItem) {
        const cartItemsContainer = document.getElementById('cart-items');
        const cartItemElement = document.createElement('div');
        cartItemElement.classList.add('cart-item');
        cartItemElement.setAttribute('data-cart-id', cartItem.id);
        
        cartItemElement.innerHTML = `
            <div class="header-product">
                <form action="/cart/remove/${cartItem.id}" method="POST" class="form-remove">
                    <input type="hidden" name="_token" value="${csrfToken}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="remove-btn"><i class="fas fa-times"></i></button>
                </form>
                <div class="pro-img">
                    ${cartItem.product.images.length > 0 ? `<img src="/storage/${cartItem.product.images[0].file_path}" alt="Product Image" class="product-image">` : '<span class="product-image-placeholder">N/A</span>'}
                </div>
                <div class="item">
                    <span class="product-name">${cartItem.product.product_name}</span><br>
                    <span class="price" data-price="${cartItem.product.price}">
                        $${cartItem.product.price.toFixed(0)}
                    </span>
                </div>
            </div>
            <div class="header-qty">
                <div class="qty">
                    <button class="qty-left" data-action="decrease" data-product-id="${cartItem.product.id}">-</button>
                    <input type="number" class="quantity-input" name="quantity" value="${cartItem.quantity}" min="1" data-product-id="${cartItem.product.id}">
                    <button class="qty-right" data-action="increase" data-product-id="${cartItem.product.id}">+</button>
                </div>
            </div>
            <div class="header-item">
                <span class="unit-price">$${(cartItem.product.price * cartItem.quantity).toFixed(0)}</span>
            </div>
        `;
        
        cartItemsContainer.appendChild(cartItemElement);
    }

    document.querySelectorAll('.add-to-cart-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const productId = form.getAttribute('data-product-id');
            const quantity = form.querySelector('input[name="quantity"]').value;

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                })
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      addCartItem(data.cartItem);
                      updateCartTotal();
                  } else {
                      console.error('Error:', data.message);
                  }
              }).catch(error => console.error('Error:', error));
        });
    });

    document.querySelectorAll('.qty button').forEach(button => {
        button.addEventListener('click', function() {
            handleQuantityChange(this);
        });
    });

    document.querySelectorAll('.remove-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const cartItemId = button.closest('.cart-item').getAttribute('data-cart-id');
            const url = button.closest('form').getAttribute('action');
            removeCartItem(cartItemId, url);
        });
    });

    updateCartTotal();
});

document.getElementById('method').addEventListener('change', function() {
    var installmentOptions = document.getElementById('installment-options');
    var depositOptions = document.getElementById('deposit-options');
    
    installmentOptions.style.display = 'none';
    depositOptions.style.display = 'none';
    
    if (this.value === 'installment') {
        installmentOptions.style.display = 'block';
    } else if (this.value === 'deposit') {
        depositOptions.style.display = 'block';
    }
});

document.getElementById('bank-button').addEventListener('click', function() {
    var modal = document.getElementById('bank-modal');
    modal.style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    var modal = document.getElementById('bank-modal');
    modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
    var modal = document.getElementById('bank-modal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});

document.querySelectorAll('#bank-list li').forEach(function(bankItem) {
    bankItem.addEventListener('click', function() {
        var selectedBank = bankItem.getAttribute('data-bank');
        var bankButton = document.getElementById('bank-button');
        var selectedBankName = document.getElementById('selected-bank-name');
        
        // bankButton.textContent = 'Select Bank : ' + bankItem.textContent;
        selectedBankName.textContent = 'Selected Bank : ' + bankItem.textContent;
        
        document.getElementById('selected-bank').value = selectedBank;
        document.getElementById('bank-modal').style.display = 'none';
    });
});

