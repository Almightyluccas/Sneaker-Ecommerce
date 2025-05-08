@extends('layouts.app')

@vite('resources/js/cart.js')

@section('title', 'Shopping Cart')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-2xl md:text-3xl font-bold text-white mb-8">Shopping Cart</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden">
                    <div class="p-6">
                        <div id="cart-items-container">
                            <!-- Cart Item 1 -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center py-5 border-b border-gray-800">
                                <div class="flex-shrink-0 w-24 h-24 bg-gray-800 rounded-md overflow-hidden">
                                    <img src="https://via.placeholder.com/150/1F2937/FFFFFF/?text=Product1" alt="Product 1" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="flex flex-1 flex-col sm:flex-row sm:items-center sm:justify-between mt-4 sm:mt-0 sm:ml-6">
                                    <div>
                                        <h3 class="text-base font-medium text-white">Premium Headphones</h3>
                                        <p class="mt-1 text-sm text-gray-400">Black | Wireless</p>
                                    </div>
                                    <div class="flex items-center justify-between sm:justify-end mt-4 sm:mt-0 w-full sm:w-auto">
                                        <div class="flex items-center border border-gray-700 rounded-md">
                                            <button class="px-3 py-1 text-gray-400 hover:text-white quantity-decrease">-</button>
                                            <span class="px-3 py-1 text-white border-l border-r border-gray-700 quantity-value">1</span>
                                            <button class="px-3 py-1 text-gray-400 hover:text-white quantity-increase">+</button>
                                        </div>
                                        <div class="ml-6 text-base font-medium text-white">$129.99</div>
                                        <button class="ml-6 text-gray-400 hover:text-white remove-item">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Cart Item 2 -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center py-5 border-b border-gray-800">
                                <div class="flex-shrink-0 w-24 h-24 bg-gray-800 rounded-md overflow-hidden">
                                    <img src="https://via.placeholder.com/150/1F2937/FFFFFF/?text=Product2" alt="Product 2" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="flex flex-1 flex-col sm:flex-row sm:items-center sm:justify-between mt-4 sm:mt-0 sm:ml-6">
                                    <div>
                                        <h3 class="text-base font-medium text-white">Smart Watch</h3>
                                        <p class="mt-1 text-sm text-gray-400">Silver | 44mm</p>
                                    </div>
                                    <div class="flex items-center justify-between sm:justify-end mt-4 sm:mt-0 w-full sm:w-auto">
                                        <div class="flex items-center border border-gray-700 rounded-md">
                                            <button class="px-3 py-1 text-gray-400 hover:text-white quantity-decrease">-</button>
                                            <span class="px-3 py-1 text-white border-l border-r border-gray-700 quantity-value">1</span>
                                            <button class="px-3 py-1 text-gray-400 hover:text-white quantity-increase">+</button>
                                        </div>
                                        <div class="ml-6 text-base font-medium text-white">$249.99</div>
                                        <button class="ml-6 text-gray-400 hover:text-white remove-item">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Cart Item 3 -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center py-5">
                                <div class="flex-shrink-0 w-24 h-24 bg-gray-800 rounded-md overflow-hidden">
                                    <img src="https://via.placeholder.com/150/1F2937/FFFFFF/?text=Product3" alt="Product 3" class="w-full h-full object-center object-cover">
                                </div>
                                <div class="flex flex-1 flex-col sm:flex-row sm:items-center sm:justify-between mt-4 sm:mt-0 sm:ml-6">
                                    <div>
                                        <h3 class="text-base font-medium text-white">Wireless Earbuds</h3>
                                        <p class="mt-1 text-sm text-gray-400">White | Noise Cancelling</p>
                                    </div>
                                    <div class="flex items-center justify-between sm:justify-end mt-4 sm:mt-0 w-full sm:w-auto">
                                        <div class="flex items-center border border-gray-700 rounded-md">
                                            <button class="px-3 py-1 text-gray-400 hover:text-white quantity-decrease">-</button>
                                            <span class="px-3 py-1 text-white border-l border-r border-gray-700 quantity-value">2</span>
                                            <button class="px-3 py-1 text-gray-400 hover:text-white quantity-increase">+</button>
                                        </div>
                                        <div class="ml-6 text-base font-medium text-white">$179.98</div>
                                        <button class="ml-6 text-gray-400 hover:text-white remove-item">
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="empty-cart" class="hidden py-12 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <h3 class="mt-2 text-lg font-medium text-white">Your cart is empty</h3>
                            <p class="mt-1 text-sm text-gray-400">Looks like you haven't added any products to your cart yet.</p>
                            <div class="mt-6">
                                <a href="{{ route('shop') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Continue Shopping
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-between items-center">
                    <a href="{{ route('shop') }}" class="text-sm font-medium text-indigo-500 hover:text-indigo-400">
                        <span aria-hidden="true">&larr;</span> Continue Shopping
                    </a>
                    <button id="clear-cart" class="text-sm font-medium text-gray-400 hover:text-white">
                        Clear Cart
                    </button>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden sticky top-20">
                    <div class="p-6">
                        <h2 class="text-lg font-medium text-white">Order Summary</h2>

                        <div class="mt-6 space-y-4">
                            <div class="flex justify-between">
                                <p class="text-sm text-gray-400">Subtotal</p>
                                <p class="text-sm font-medium text-white">$559.96</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm text-gray-400">Shipping</p>
                                <p class="text-sm font-medium text-white">$9.99</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm text-gray-400">Tax</p>
                                <p class="text-sm font-medium text-white">$45.50</p>
                            </div>
                            <div class="border-t border-gray-800 pt-4 flex justify-between">
                                <p class="text-base font-medium text-white">Total</p>
                                <p class="text-base font-medium text-white">$615.45</p>
                            </div>
                        </div>

                        <div class="mt-6">
                            checkout
{{--                            <a href="{{ route('checkout') }}" class="w-full flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">--}}
{{--                                Checkout--}}
{{--                            </a>--}}
                        </div>

                        <div class="mt-6">
                            <div class="flex items-center">
                                <input id="discount-code" name="discount-code" type="text" placeholder="Discount code" class="block w-full bg-gray-800 border border-gray-700 rounded-md py-2 px-3 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <button type="button" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Apply
                                </button>
                            </div>
                        </div>

                        <div class="mt-6 border-t border-gray-800 pt-4">
                            <h3 class="text-sm font-medium text-white">We Accept</h3>
                            <div class="mt-2 flex space-x-2">
                                <div class="h-8 w-12 bg-gray-800 rounded flex items-center justify-center text-xs text-gray-400">Visa</div>
                                <div class="h-8 w-12 bg-gray-800 rounded flex items-center justify-center text-xs text-gray-400">MC</div>
                                <div class="h-8 w-12 bg-gray-800 rounded flex items-center justify-center text-xs text-gray-400">Amex</div>
                                <div class="h-8 w-12 bg-gray-800 rounded flex items-center justify-center text-xs text-gray-400">PayPal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
@endsection
