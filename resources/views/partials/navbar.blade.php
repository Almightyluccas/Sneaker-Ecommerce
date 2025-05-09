@vite('resources/js/navbar.js')
<nav class="bg-gray-900 border-b border-gray-800 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex items-center">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('home') }}" class="text-white font-bold text-xl">
            <span class="text-indigo-500">Dark</span>Commerce
          </a>
        </div>
        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
          <a href="{{ route('home') }}" class="border-indigo-500 text-white inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
            Home
          </a>
          <a href="{{ route('shop') }}" class="border-transparent text-gray-300 hover:text-white hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
            Shop
          </a>
          <a href="{{ route('about') }}" class="border-transparent text-gray-300 hover:text-white hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
            About
          </a>
          <a href="{{ route('contact') }}" class="border-transparent text-gray-300 hover:text-white hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
            Contact
          </a>
        </div>
      </div>

      <div class="hidden md:flex flex-1 items-center justify-center px-2 lg:ml-6 lg:justify-center max-w-md mx-auto">
        <div class="w-full">
          <label for="search" class="sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
            <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-gray-700 rounded-md leading-5 bg-gray-800 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm" placeholder="Search" type="search">
          </div>
        </div>
      </div>

      <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
        <div class="relative" id="cart-container">
          <button type="button" class="p-1 rounded-full text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white relative" id="cart-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">View cart</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="absolute -top-2 -right-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-indigo-600 rounded-full">3</span>
          </button>

          <div class="hidden origin-top-right absolute right-0 mt-2 w-80 rounded-md shadow-lg bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none z-10" id="cart-dropdown">
            <div class="py-1">
              <div class="px-4 py-2 border-b border-gray-700">
                <h3 class="text-sm font-medium text-white">Your Cart (3 items)</h3>
              </div>

              <div class="max-h-60 overflow-y-auto">
                <div class="px-4 py-3 flex items-center hover:bg-gray-700">
                  <div class="flex-shrink-0 w-12 h-12 border border-gray-700 rounded-md overflow-hidden">
                    <img src="https://via.placeholder.com/150/1F2937/FFFFFF/?text=Product" alt="Product" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-white">Wireless Headphones</p>
                    <p class="text-xs text-gray-400">1 × $129.99</p>
                  </div>
                  <button type="button" class="text-gray-400 hover:text-white">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>

                <div class="px-4 py-3 flex items-center hover:bg-gray-700">
                  <div class="flex-shrink-0 w-12 h-12 border border-gray-700 rounded-md overflow-hidden">
                    <img src="https://via.placeholder.com/150/1F2937/FFFFFF/?text=Product" alt="Product" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-white">Smart Watch</p>
                    <p class="text-xs text-gray-400">1 × $249.99</p>
                  </div>
                  <button type="button" class="text-gray-400 hover:text-white">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>

                <div class="px-4 py-3 flex items-center hover:bg-gray-700">
                  <div class="flex-shrink-0 w-12 h-12 border border-gray-700 rounded-md overflow-hidden">
                    <img src="https://via.placeholder.com/150/1F2937/FFFFFF/?text=Product" alt="Product" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-white">Bluetooth Speaker</p>
                    <p class="text-xs text-gray-400">1 × $79.99</p>
                  </div>
                  <button type="button" class="text-gray-400 hover:text-white">
                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>

              <div class="px-4 py-3 border-t border-gray-700">
                <div class="flex justify-between text-sm">
                  <p class="text-gray-400">Subtotal</p>
                  <p class="font-medium text-white">$459.97</p>
                </div>
              </div>

              <div class="px-4 py-3 border-t border-gray-700">
                <a href="{{ route('cart') }}" class="block w-full text-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  View Cart
                </a>
                <a href="{{ route('checkout') }}" class="block w-full text-center mt-2 px-4 py-2 border border-gray-600 rounded-md shadow-sm text-sm font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Checkout
                </a>
              </div>
            </div>
          </div>
        </div>

        @guest
          <div class="flex items-center space-x-3">
            <a href="{{ route('login.show') }}" class="text-gray-300 hover:text-white text-sm font-medium">Login</a>
            <a href="{{ route('register.show') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</a>
          </div>
        @else
          <div class="relative" id="profile-container">
            <div>
              <button type="button" class="flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <div class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-sm font-medium">
                  {{ substr(Auth::user()->name, 0, 1) }}
                </div>
              </button>
            </div>

            <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                 role="menu"
                 aria-orientation="vertical"
                 aria-labelledby="user-menu-button"
                 id="user-menu">
              <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem">Your Profile</a>
              <a href="{{ route('settings') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white" role="menuitem">Settings</a>
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                 class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white"
                 role="menuitem">
                Sign out
              </a>
            </div>
          </div>
        @endguest
      </div>

      <div class="flex items-center sm:hidden">
        <button type="button" class="p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="mobile-search-button">
          <span class="sr-only">Search</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>

        <a href="{{ route('cart') }}" class="ml-2 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white relative">
          <span class="sr-only">View cart</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="absolute -top-2 -right-2 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-indigo-600 rounded-full">3</span>
        </a>

        <button type="button" class="ml-2 bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" id="mobile-menu-icon-open">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" id="mobile-menu-icon-close">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="sm:hidden hidden" id="mobile-search-panel">
    <div class="px-2 pt-2 pb-3">
      <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
          <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
          </svg>
        </div>
        <input id="mobile-search" name="mobile-search" class="block w-full pl-10 pr-3 py-2 border border-gray-700 rounded-md leading-5 bg-gray-800 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-gray-700 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 sm:text-sm" placeholder="Search" type="search">
      </div>
    </div>
  </div>

  <div class="sm:hidden hidden" id="mobile-menu">
    <div class="pt-2 pb-3 space-y-1">
      <a href="{{ route('home') }}" class="bg-gray-800 text-white block pl-3 pr-4 py-2 border-l-4 border-indigo-500 text-base font-medium">Home</a>
      <a href="{{ route('shop') }}" class="border-transparent text-gray-300 hover:bg-gray-700 hover:text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Shop</a>
      <a href="{{ route('about') }}" class="border-transparent text-gray-300 hover:bg-gray-700 hover:text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">About</a>
      <a href="{{ route('contact') }}" class="border-transparent text-gray-300 hover:bg-gray-700 hover:text-white block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Contact</a>
    </div>

    <div class="pt-4 pb-3 border-t border-gray-700">
      @guest
        <div class="mt-3 space-y-1">
          <a href="{{ route('login.show') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
          <a href="{{ route('register.show') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a>
        </div>
      @else
        <div class="flex items-center px-4">
          <div class="flex-shrink-0">
            <div class="h-10 w-10 rounded-full bg-indigo-600 flex items-center justify-center text-white font-medium">
              {{ substr(Auth::user()->name, 0, 1) }}
            </div>
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
            <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email }}</div>
          </div>
        </div>
        <div class="mt-3 space-y-1">
          <a href="{{ route('profile') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="{{ route('settings') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
             class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
            Sign out
          </a>
        </div>
      @endguest
    </div>
  </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
  @csrf
</form>

