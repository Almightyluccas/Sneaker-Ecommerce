const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const menuIconOpen = document.getElementById('menu-icon-open');
const menuIconClose = document.getElementById('menu-icon-close');

mobileMenuButton.addEventListener('click', function() {
    const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
    mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
    mobileMenu.classList.toggle('hidden');
    menuIconOpen.classList.toggle('hidden');
    menuIconClose.classList.toggle('hidden');
});

const searchButton = document.getElementById('search-button');
const searchDropdown = document.getElementById('search-dropdown');

searchButton.addEventListener('click', function() {
    searchDropdown.classList.toggle('hidden');
    cartDropdown.classList.add('hidden');
    profileDropdown.classList.add('hidden');
});

const cartButton = document.getElementById('cart-button');
const cartDropdown = document.getElementById('cart-dropdown');

cartButton.addEventListener('click', function() {
    cartDropdown.classList.toggle('hidden');
    searchDropdown.classList.add('hidden');
    profileDropdown.classList.add('hidden');
});

const profileButton = document.getElementById('profile-button');
const profileDropdown = document.getElementById('profile-dropdown');

profileButton.addEventListener('click', function() {
    profileDropdown.classList.toggle('hidden');
    searchDropdown.classList.add('hidden');
    cartDropdown.classList.add('hidden');
});

document.addEventListener('click', function(event) {
    if (!searchButton.contains(event.target) && !searchDropdown.contains(event.target)) {
        searchDropdown.classList.add('hidden');
    }
    if (!cartButton.contains(event.target) && !cartDropdown.contains(event.target)) {
        cartDropdown.classList.add('hidden');
    }
    if (!profileButton.contains(event.target) && !profileDropdown.contains(event.target)) {
        profileDropdown.classList.add('hidden');
    }
});
