// Product gallery
const mainImage = document.getElementById('main-image');
const thumbnailButtons = document.querySelectorAll('.thumbnail-button');

thumbnailButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Update main image
        mainImage.src = this.getAttribute('data-image');

        // Update active thumbnail
        thumbnailButtons.forEach(btn => {
            btn.classList.remove('ring-2', 'ring-indigo-500');
        });
        this.classList.add('ring-2', 'ring-indigo-500');
    });
});

// Color selector
const colorSelectors = document.querySelectorAll('.color-selector');

colorSelectors.forEach(button => {
    button.addEventListener('click', function() {
        // Update active color
        colorSelectors.forEach(btn => {
            btn.classList.remove('ring-2', 'ring-indigo-500', 'ring-offset-2', 'ring-offset-gray-900');
        });
        this.classList.add('ring-2', 'ring-indigo-500', 'ring-offset-2', 'ring-offset-gray-900');
    });
});

// Quantity controls
const quantityInput = document.getElementById('quantity-input');
const quantityDecrease = document.getElementById('quantity-decrease');
const quantityIncrease = document.getElementById('quantity-increase');

quantityDecrease.addEventListener('click', function() {
    const currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
});

quantityIncrease.addEventListener('click', function() {
    const currentValue = parseInt(quantityInput.value);
    quantityInput.value = currentValue + 1;
});

// Add to cart button
const addToCartButton = document.getElementById('add-to-cart');

addToCartButton.addEventListener('click', function() {
    // This would typically trigger an API call or update a cart state
    // For this example, we'll just show an alert
    const quantity = parseInt(quantityInput.value);
    alert(`Added ${quantity} item(s) to cart`);
});

// Add to wishlist button
const addToWishlistButton = document.getElementById('add-to-wishlist');

addToWishlistButton.addEventListener('click', function() {
    // This would typically trigger an API call or update a wishlist state
    // For this example, we'll just show an alert
    alert('Added to wishlist');
});
