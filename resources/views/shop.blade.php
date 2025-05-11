@extends('layouts.app')

@vite('resources/js/shop.js')

@section('title', 'Shop')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h1 class="text-2xl md:text-3xl font-bold text-white mb-8">Shop</h1>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Filters Sidebar -->
            <div class="lg:col-span-1">
                <!-- Mobile filter dialog -->
                <div id="mobile-filter-dialog" class="fixed inset-0 flex z-40 lg:hidden hidden" role="dialog" aria-modal="true">
                    <div id="mobile-filter-backdrop" class="fixed inset-0 bg-black bg-opacity-25"></div>

                    <div id="mobile-filter-panel" class="ml-auto relative max-w-xs w-full h-full bg-gray-900 shadow-xl py-4 pb-12 flex flex-col overflow-y-auto transform translate-x-full transition-transform duration-300 ease-in-out">
                        <div class="px-4 flex items-center justify-between">
                            <h2 class="text-lg font-medium text-white">Filters</h2>
                            <button id="close-mobile-filter" type="button" class="-mr-2 w-10 h-10 bg-gray-800 p-2 rounded-md flex items-center justify-center text-gray-400 hover:text-white">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Mobile Filters -->
                        <div class="mt-4 border-t border-gray-800">
                            @include('components.shop-filters')
                        </div>
                    </div>
                </div>

                <!-- Mobile filter button -->
                <div class="flex items-center justify-between lg:hidden mb-6">
                    <button id="open-mobile-filter" type="button" class="inline-flex items-center px-4 py-2 border border-gray-700 rounded-md shadow-sm text-sm font-medium text-white bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        Filters
                    </button>

                    <div class="flex items-center">
                        <label for="mobile-sort" class="sr-only">Sort</label>
                        <select id="mobile-sort" name="mobile-sort" class="block w-full pl-3 pr-10 py-2 text-base border-gray-700 bg-gray-800 text-white focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option>Most Popular</option>
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                </div>

                <!-- Desktop Filters -->
                <div class="hidden lg:block bg-gray-900 rounded-lg border border-gray-800 overflow-hidden sticky top-20">
                    <div class="p-6">
                        <h2 class="text-lg font-medium text-white mb-4">Filters</h2>
                        @include('components.shop-filters')
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="lg:col-span-3">
                <!-- Search and Sort -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <div class="w-full sm:w-auto flex-1 max-w-lg">
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text" name="search" id="search" class="block w-full pl-10 pr-3 py-2 border border-gray-700 rounded-md leading-5 bg-gray-800 text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search products...">
                        </div>
                    </div>

                    <div class="hidden sm:flex items-center">
                        <label for="desktop-sort" class="text-sm font-medium text-gray-300 mr-2">Sort by</label>
                        <select id="desktop-sort" name="desktop-sort" class="block w-full pl-3 pr-10 py-2 text-base border-gray-700 bg-gray-800 text-white focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option>Most Popular</option>
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($products as $product)
                        @include('components.product-card', [
                            'id' => $product->id,
                            'name' => $product->name,
                            'price' => $product->price,
                            'image' => $product->thumbnail,
                            'isNew' => $product->is_new ?? false,
                            'isSale' => $product->is_sale ?? false
                        ])
                    @endforeach
                </div>

                <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-gray-800 pt-6">
                    {{ $products->appends(request()->query())->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
