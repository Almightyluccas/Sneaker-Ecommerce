@extends('layouts.app')

@vite('resources/js/product-page.js')

@section('title', $product->name)

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li>
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-white text-sm">Home</a>
                </li>
                <li class="flex items-center">
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <a href="{{ route('shop') }}" class="ml-2 text-gray-400 hover:text-white text-sm">Shop</a>
                </li>
                <li class="flex items-center">
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
{{--                    TODO: Make this reidrect to the category--}}
                    <a href="#" class="ml-2 text-gray-400 hover:text-white text-sm">{{$product->category}}</a>
                </li>
                <li class="flex items-center">
                    <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="ml-2 text-white text-sm font-medium">{{$product->name}}</span>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div id="product-gallery">
                <!-- Main Image -->
                <div class="bg-gray-900 rounded-lg overflow-hidden border border-gray-800">
                    <img id="main-image" src="{{ $product->thumbnail }}" alt="Product Image" class="w-full h-auto object-center object-cover">
                </div>

                <!-- Thumbnails -->
{{--                <div class="mt-4 grid grid-cols-4 gap-4">--}}
{{--                    <button class="thumbnail-button bg-gray-900 rounded-md overflow-hidden border border-gray-800 hover:border-gray-700 transition-all duration-150 ring-2 ring-indigo-500" data-image="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-1">--}}
{{--                        <img src="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-1" alt="Product thumbnail" class="w-full h-24 object-center object-cover">--}}
{{--                    </button>--}}
{{--                    <button class="thumbnail-button bg-gray-900 rounded-md overflow-hidden border border-gray-800 hover:border-gray-700 transition-all duration-150" data-image="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-2">--}}
{{--                        <img src="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-2" alt="Product thumbnail" class="w-full h-24 object-center object-cover">--}}
{{--                    </button>--}}
{{--                    <button class="thumbnail-button bg-gray-900 rounded-md overflow-hidden border border-gray-800 hover:border-gray-700 transition-all duration-150" data-image="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-3">--}}
{{--                        <img src="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-3" alt="Product thumbnail" class="w-full h-24 object-center object-cover">--}}
{{--                    </button>--}}
{{--                    <button class="thumbnail-button bg-gray-900 rounded-md overflow-hidden border border-gray-800 hover:border-gray-700 transition-all duration-150" data-image="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-4">--}}
{{--                        <img src="https://via.placeholder.com/600/1F2937/FFFFFF/?text=Headphones-4" alt="Product thumbnail" class="w-full h-24 object-center object-cover">--}}
{{--                    </button>--}}
{{--                </div>--}}
            </div>

            <!-- Product Details -->
            <div>
                <div class="flex items-center">
                    <span class="px-2 py-1 text-xs font-semibold text-white bg-indigo-600 rounded-full">New</span>
                    @if ($product->isInStock())
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-green-600 rounded-full">In Stock</span>
                    @else
                        <span class="px-2 py-1 text-xs font-semibold text-white bg-red-600 rounded-full">Out of Stock</span>
                    @endif                </div>

                <h1 class="mt-4 text-2xl md:text-3xl font-bold text-white">{{$product->name}}</h1>

                <div class="mt-4 flex items-center">
                    <div class="flex items-center">
                        @for($i = 1; $i <= 4; $i++)
                            <svg class="h-5 w-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
{{--                    TODO: add reviews--}}
                    <span class="ml-2 text-sm text-gray-400">4.0 (128 reviews)</span>
                </div>

                <div class="mt-6">
                    <h2 class="text-xl font-bold text-white">{{$product->formatted_price}}</h2>
                    <p class="mt-1 text-sm text-gray-400">Free shipping on orders over $50</p>
                </div>

                <div class="mt-6">
                    <h3 class="text-sm font-medium text-white">Color</h3>
                    <div class="mt-2 flex items-center space-x-3">
                        {{$product->colorway}}
                    </div>
                </div>

                <div class="mt-6">
                    <h3 class="text-sm font-medium text-white">Quantity</h3>
                    <div class="mt-2 flex items-center">
                        <button id="quantity-decrease" class="p-2 border border-gray-700 rounded-l-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </button>
                        <input id="quantity-input" type="number" min="1" value="1" class="w-16 border-t border-b border-gray-700 bg-gray-800 text-white text-center focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <button id="quantity-increase" class="p-2 border border-gray-700 rounded-r-md bg-gray-800 text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <button type="button" id="add-to-cart" class="flex-1 bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Add to Cart
                    </button>
                    <button type="button" id="add-to-wishlist" class="flex-1 bg-gray-800 border border-gray-700 rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        Add to Wishlist
                    </button>
                </div>

                <div class="mt-8 border-t border-gray-800 pt-8">
                    <h3 class="text-lg font-medium text-white">Product Description</h3>
                    <div class="mt-4 prose prose-sm text-gray-300">
                        <p>{{$product->description}}</p>
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-800 pt-8">
                    <h3 class="text-lg font-medium text-white">Specifications</h3>
                    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-4">
                        <div>
{{--                           TODO: Fix release_date to remove 00:00:000--}}
                            <h4 class="text-sm font-medium text-gray-400">Release Date</h4>
                            <p class="mt-1 text-sm text-white">{{$product->release_date}}</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-400">Colors</h4>
                            <p class="mt-1 text-sm text-white">{{$product->colorway}}</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-400">Silhouette</h4>
                            <p class="mt-1 text-sm text-white">{{$product->silhoutte}}</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-medium text-gray-400">Brand</h4>
                            <p class="mt-1 text-sm text-white">{{$product->brand}}</p>
                        </div>
{{--                        <div>--}}
{{--                            <h4 class="text-sm font-medium text-gray-400">Dimensions</h4>--}}
{{--                            <p class="mt-1 text-sm text-white">7.5 x 6.5 x 4 inches</p>--}}
{{--                        </div>--}}
                        <div>
                            <h4 class="text-sm font-medium text-gray-400">Warranty</h4>
                            <p class="mt-1 text-sm text-white">7 day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-16 border-t border-gray-800 pt-8">
            <h2 class="text-2xl font-bold text-white">Customer Reviews</h2>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Review Summary -->
                <div class="bg-gray-900 rounded-lg border border-gray-800 p-6">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            @for($i = 1; $i <= 4; $i++)
                                <svg class="h-8 w-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                            <svg class="h-8 w-8 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <span class="ml-3 text-xl font-bold text-white">4.0 out of 5</span>
                    </div>
                    <p class="mt-1 text-sm text-gray-400">Based on 128 reviews</p>

                    <div class="mt-6 space-y-3">
                        <div class="flex items-center">
                            <span class="text-sm text-gray-400 w-12">5 star</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="bg-yellow-500 h-full rounded-full" style="width: 65%"></div>
                            </div>
                            <span class="text-sm text-gray-400 w-12 text-right">65%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-400 w-12">4 star</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="bg-yellow-500 h-full rounded-full" style="width: 20%"></div>
                            </div>
                            <span class="text-sm text-gray-400 w-12 text-right">20%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-400 w-12">3 star</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="bg-yellow-500 h-full rounded-full" style="width: 10%"></div>
                            </div>
                            <span class="text-sm text-gray-400 w-12 text-right">10%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-400 w-12">2 star</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="bg-yellow-500 h-full rounded-full" style="width: 3%"></div>
                            </div>
                            <span class="text-sm text-gray-400 w-12 text-right">3%</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-400 w-12">1 star</span>
                            <div class="flex-1 h-4 mx-2 bg-gray-800 rounded-full overflow-hidden">
                                <div class="bg-yellow-500 h-full rounded-full" style="width: 2%"></div>
                            </div>
                            <span class="text-sm text-gray-400 w-12 text-right">2%</span>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" class="w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Write a Review
                        </button>
                    </div>
                </div>

                <!-- Review List -->
                <div class="space-y-6">
                    <!-- Review 1 -->
                    <div class="bg-gray-900 rounded-lg border border-gray-800 p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">John Doe</p>
                                    <div class="flex items-center mt-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg class="h-4 w-4 {{ $i <= 5 ? 'text-yellow-500' : 'text-gray-400' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-gray-400">3 days ago</p>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-sm font-medium text-white">Great sound quality, comfortable fit</h4>
                            <p class="mt-2 text-sm text-gray-300">I've been using these headphones for about a week now and I'm very impressed with the sound quality. The noise cancellation works great and they're very comfortable to wear for long periods. Battery life is excellent too.</p>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="bg-gray-900 rounded-lg border border-gray-800 p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">Jane Smith</p>
                                    <div class="flex items-center mt-1">
                                        @for($i = 1; $i <= 4; $i++)
                                            <svg class="h-4 w-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-gray-400">1 week ago</p>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-sm font-medium text-white">Good, but could be better</h4>
                            <p class="mt-2 text-sm text-gray-300">The sound quality is excellent and the noise cancellation works well. However, I find them a bit tight on my head after a few hours of use. Battery life is as advertised, which is great.</p>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="bg-gray-900 rounded-lg border border-gray-800 p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User avatar">
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">Michael Johnson</p>
                                    <div class="flex items-center mt-1">
                                        @for($i = 1; $i <= 3; $i++)
                                            <svg class="h-4 w-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                        @for($i = 1; $i <= 2; $i++)
                                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-gray-400">2 weeks ago</p>
                        </div>
                        <div class="mt-4">
                            <h4 class="text-sm font-medium text-white">Decent, but overpriced</h4>
                            <p class="mt-2 text-sm text-gray-300">The headphones are decent, but I think they're a bit overpriced for what you get. The sound quality is good, but not exceptional. The noise cancellation is average at best. On the plus side, they are comfortable and the battery life is excellent.</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="button" class="text-sm font-medium text-indigo-500 hover:text-indigo-400">
                            Load More Reviews
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-16 border-t border-gray-800 pt-8">
            <h2 class="text-2xl font-bold text-white">You May Also Like</h2>

            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
{{--                todo: implement isNew isSale or remove--}}
                @forelse ($relatedProducts as $relatedProduct)
                    @include('components.product-card', [
                        'id' => $relatedProduct->id,
                        'name' => $relatedProduct->name,
                        'price' => $relatedProduct->price,
                        'image' => $relatedProduct->thumbnail,
                        'isNew' => false,
                        'isSale' => false
                    ])
                @empty
                    <p class="text-gray-400 col-span-4 text-center">No related products found</p>
                @endforelse
            </div>
        </div>
    </div>

@endsection
