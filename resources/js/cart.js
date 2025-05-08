// Quantity controls

document.querySelectorAll('.quantity-decrease').forEach(button => {
    button.addEventListener('click', function() {
        const valueElement = this.parentElement.querySelector('.quantity-value');
        let value = parseInt(valueElement.textContent);
        if (value > 1) {
            valueElement.textContent = value - 1;
            updateCartTotals();
        }
    });
});

document.querySelectorAll('.quantity-increase').forEach(button => {
    button.addEventListener('click', function() {
        const valueElement = this.parentElement.querySelector('.quantity-value');
        let value = parseInt(valueElement.textContent);
        valueElement.textContent = value + 1;
        updateCartTotals();
    });
});

// Remove item
document.querySelectorAll('.remove-item').forEach(button => {
    button.addEventListener('click', function() {
        this.closest('div.flex.flex-col.sm\\:flex-row').remove();
        updateCartTotals();
        checkEmptyCart();
    });
});

// Clear cart
document.getElementById('clear-cart').addEventListener('click', function() {
    document.getElementById('cart-items-container').innerHTML = '';
    document.getElementById('empty-cart').classList.remove('hidden');
    updateCartTotals();
});

// Check if cart is empty
function checkEmptyCart() {
    const cartItems = document.querySelectorAll('#cart-items-container > div');
    if (cartItems.length === 0) {
        document.getElementById('empty-cart').classList.remove('hidden');
    } else {
        document.getElementById('empty-cart').classList.add('hidden');
    }
}

// Update cart totals (placeholder function)
function updateCartTotals() {
    // This would typically make calculations based on quantities and prices
    // For this example, we're just showing the function structure
    console.log('Cart totals updated');
}
