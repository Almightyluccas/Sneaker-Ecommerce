document.addEventListener('DOMContentLoaded', function() {
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuIconOpen = document.getElementById('mobile-menu-icon-open');
  const mobileMenuIconClose = document.getElementById('mobile-menu-icon-close');

  mobileMenuButton.addEventListener('click', function() {
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !expanded);

    mobileMenu.classList.toggle('hidden');
    mobileMenuIconOpen.classList.toggle('hidden');
    mobileMenuIconClose.classList.toggle('hidden');
  });

  const mobileSearchButton = document.getElementById('mobile-search-button');
  const mobileSearchPanel = document.getElementById('mobile-search-panel');

  mobileSearchButton.addEventListener('click', function() {
    mobileSearchPanel.classList.toggle('hidden');

    if (!mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.add('hidden');
      mobileMenuButton.setAttribute('aria-expanded', 'false');
      mobileMenuIconOpen.classList.remove('hidden');
      mobileMenuIconClose.classList.add('hidden');
    }
  });

  const userMenuButton = document.getElementById('user-menu-button');
  const userMenu = document.getElementById('user-menu');

  if (userMenuButton) {
    userMenuButton.addEventListener('click', function(event) {
      event.stopPropagation();
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !expanded);

      userMenu.classList.toggle('hidden');

      if (cartDropdown && !cartDropdown.classList.contains('hidden')) {
        cartDropdown.classList.add('hidden');
        cartButton.setAttribute('aria-expanded', 'false');
      }
    });
  }

  const cartButton = document.getElementById('cart-button');
  const cartDropdown = document.getElementById('cart-dropdown');

  if (cartButton) {
    cartButton.addEventListener('click', function(event) {
      event.stopPropagation();
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !expanded);

      cartDropdown.classList.toggle('hidden');

      if (userMenu && !userMenu.classList.contains('hidden')) {
        userMenu.classList.add('hidden');
        userMenuButton.setAttribute('aria-expanded', 'false');
      }
    });
  }

  document.addEventListener('click', function(event) {
    if (userMenu && userMenuButton && !userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
      userMenu.classList.add('hidden');
      userMenuButton.setAttribute('aria-expanded', 'false');
    }

    if (cartDropdown && cartButton && !cartButton.contains(event.target) && !cartDropdown.contains(event.target)) {
      cartDropdown.classList.add('hidden');
      cartButton.setAttribute('aria-expanded', 'false');
    }
  });

  function adjustDropdownPosition() {
    if (userMenu) {
      const rect = userMenu.getBoundingClientRect();
      if (rect.right > window.innerWidth) {
        userMenu.style.right = '0';
        userMenu.style.left = 'auto';
      }
    }

    if (cartDropdown) {
      const rect = cartDropdown.getBoundingClientRect();
      if (rect.right > window.innerWidth) {
        cartDropdown.style.right = '0';
        cartDropdown.style.left = 'auto';
      }
    }
  }

  if (userMenuButton) {
    userMenuButton.addEventListener('click', adjustDropdownPosition);
  }

  if (cartButton) {
    cartButton.addEventListener('click', adjustDropdownPosition);
  }
  window.addEventListener('resize', adjustDropdownPosition);
});
