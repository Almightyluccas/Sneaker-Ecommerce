@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="md:w-2/3">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
                    <span class="block">Discover the Latest</span>
                    <span class="block text-indigo-500">Premium Products</span>
                </h1>
                <p class="mt-6 text-xl text-gray-300 max-w-3xl">
                    Shop the latest trends and discover premium quality products that elevate your lifestyle.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('shop') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150 ease-in-out">
                        Shop Now
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-6 py-3 border border-gray-700 text-base font-medium rounded-md text-gray-300 bg-transparent hover:bg-gray-800 transition duration-150 ease-in-out">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative element -->
        <div class="hidden lg:block absolute right-0 top-1/2 transform -translate-y-1/2 w-1/3 h-3/4">
            <div class="w-full h-full bg-gradient-to-l from-indigo-600/20 to-transparent rounded-l-3xl"></div>
        </div>
    </section>

    <!-- Latest Products Section -->
    <section class="bg-gray-950 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-white">Latest Products</h2>
                <a href="{{ route('shop') }}" class="text-indigo-500 hover:text-indigo-400 text-sm font-medium">
                    View All
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                    @include('components.product-card', [
                        'id' => $i,
                        'name' => 'Product ' . $i,
                        'price' => 29.99 + ($i * 10),
                        'image' => 'https://via.placeholder.com/300/1F2937/FFFFFF/?text=Product' . $i,
                        'isNew' => $i === 1,
                        'isSale' => $i === 3
                    ])
                @endfor
            </div>
        </div>
    </section>

    <!-- Featured Sales Section -->
    <section class="bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-white mb-8">Featured Sales</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Sale Card 1 -->
                <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-purple-800 to-indigo-700">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="relative p-8 md:p-10 flex flex-col h-full min-h-[250px] justify-between">
                        <div>
                            <p class="text-indigo-200 text-sm font-semibold uppercase tracking-wider">Limited Time Offer</p>
                            <h3 class="mt-2 text-2xl md:text-3xl font-bold text-white">Summer Collection</h3>
                            <p class="mt-2 text-indigo-100">Up to 40% off on selected items</p>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('shop') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-indigo-700 bg-white hover:bg-indigo-50 transition duration-150">
                                Shop the Sale
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sale Card 2 -->
                <div class="relative overflow-hidden rounded-lg bg-gradient-to-r from-gray-800 to-gray-900">
                    <div class="absolute inset-0 bg-black/20"></div>
                    <div class="relative p-8 md:p-10 flex flex-col h-full min-h-[250px] justify-between">
                        <div>
                            <p class="text-gray-300 text-sm font-semibold uppercase tracking-wider">New Arrivals</p>
                            <h3 class="mt-2 text-2xl md:text-3xl font-bold text-white">Premium Collection</h3>
                            <p class="mt-2 text-gray-300">Exclusive products for our premium customers</p>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('shop') }}" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-gray-900 bg-white hover:bg-gray-100 transition duration-150">
                                Explore Collection
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Store Benefits Section -->
    <section class="bg-gray-950 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl font-bold text-white text-center mb-12">Why Shop With Us</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Benefit 1 -->
                <div class="flex flex-col items-center text-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white mb-4">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white">Free Shipping</h3>
                    <p class="mt-2 text-sm text-gray-400">Free shipping on all orders over $50</p>
                </div>

                <!-- Benefit 2 -->
                <div class="flex flex-col items-center text-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white mb-4">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white">Secure Payments</h3>
                    <p class="mt-2 text-sm text-gray-400">All transactions are secure and encrypted</p>
                </div>

                <!-- Benefit 3 -->
                <div class="flex flex-col items-center text-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white mb-4">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white">Easy Returns</h3>
                    <p class="mt-2 text-sm text-gray-400">30-day return policy for all products</p>
                </div>

                <!-- Benefit 4 -->
                <div class="flex flex-col items-center text-center">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white mb-4">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-white">24/7 Support</h3>
                    <p class="mt-2 text-sm text-gray-400">Our customer support is always available</p>
                </div>
            </div>
        </div>
    </section>
@endsection
