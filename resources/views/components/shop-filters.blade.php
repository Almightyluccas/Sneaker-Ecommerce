<div class="space-y-6">
    <!-- Categories Filter -->
    <div>
        <button type="button" class="filter-section-toggle flex w-full items-center justify-between text-sm text-white font-medium" aria-controls="filter-section-0" aria-expanded="true">
            <span>Categories</span>
            <span class="ml-6 flex items-center">
                <svg class="h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </button>
        <div class="filter-section-content pt-4 pb-2 space-y-2" style="max-height: 1000px;">
            <div class="flex items-center">
                <input id="category-electronics" name="category[]" value="electronics" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="category-electronics" class="ml-3 text-sm text-gray-300">Electronics</label>
            </div>
            <div class="flex items-center">
                <input id="category-clothing" name="category[]" value="clothing" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="category-clothing" class="ml-3 text-sm text-gray-300">Clothing</label>
            </div>
            <div class="flex items-center">
                <input id="category-home" name="category[]" value="home" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="category-home" class="ml-3 text-sm text-gray-300">Home & Kitchen</label>
            </div>
            <div class="flex items-center">
                <input id="category-books" name="category[]" value="books" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="category-books" class="ml-3 text-sm text-gray-300">Books</label>
            </div>
            <div class="flex items-center">
                <input id="category-sports" name="category[]" value="sports" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="category-sports" class="ml-3 text-sm text-gray-300">Sports & Outdoors</label>
            </div>
        </div>
    </div>

    <!-- Price Filter -->
    <div>
        <button type="button" class="filter-section-toggle flex w-full items-center justify-between text-sm text-white font-medium" aria-controls="filter-section-1" aria-expanded="true">
            <span>Price</span>
            <span class="ml-6 flex items-center">
                <svg class="h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </button>
        <div class="filter-section-content pt-4 pb-2 space-y-2" style="max-height: 1000px;">
            <div class="flex items-center">
                <input id="price-under-25" name="price[]" value="under-25" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="price-under-25" class="ml-3 text-sm text-gray-300">Under $25</label>
            </div>
            <div class="flex items-center">
                <input id="price-25-50" name="price[]" value="25-50" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="price-25-50" class="ml-3 text-sm text-gray-300">$25 to $50</label>
            </div>
            <div class="flex items-center">
                <input id="price-50-100" name="price[]" value="50-100" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="price-50-100" class="ml-3 text-sm text-gray-300">$50 to $100</label>
            </div>
            <div class="flex items-center">
                <input id="price-100-200" name="price[]" value="100-200" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="price-100-200" class="ml-3 text-sm text-gray-300">$100 to $200</label>
            </div>
            <div class="flex items-center">
                <input id="price-over-200" name="price[]" value="over-200" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="price-over-200" class="ml-3 text-sm text-gray-300">$200 & Above</label>
            </div>
        </div>
    </div>

    <!-- Brand Filter -->
    <div>
        <button type="button" class="filter-section-toggle flex w-full items-center justify-between text-sm text-white font-medium" aria-controls="filter-section-2" aria-expanded="true">
            <span>Brand</span>
            <span class="ml-6 flex items-center">
                <svg class="h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </button>
        <div class="filter-section-content pt-4 pb-2 space-y-2" style="max-height: 1000px;">
            <div class="flex items-center">
                <input id="brand-apple" name="brand[]" value="apple" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="brand-apple" class="ml-3 text-sm text-gray-300">Apple</label>
            </div>
            <div class="flex items-center">
                <input id="brand-samsung" name="brand[]" value="samsung" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="brand-samsung" class="ml-3 text-sm text-gray-300">Samsung</label>
            </div>
            <div class="flex items-center">
                <input id="brand-sony" name="brand[]" value="sony" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="brand-sony" class="ml-3 text-sm text-gray-300">Sony</label>
            </div>
            <div class="flex items-center">
                <input id="brand-nike" name="brand[]" value="nike" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="brand-nike" class="ml-3 text-sm text-gray-300">Nike</label>
            </div>
            <div class="flex items-center">
                <input id="brand-adidas" name="brand[]" value="adidas" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="brand-adidas" class="ml-3 text-sm text-gray-300">Adidas</label>
            </div>
        </div>
    </div>

    <!-- Rating Filter -->
    <div>
        <button type="button" class="filter-section-toggle flex w-full items-center justify-between text-sm text-white font-medium" aria-controls="filter-section-3" aria-expanded="true">
            <span>Rating</span>
            <span class="ml-6 flex items-center">
                <svg class="h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </button>
        <div class="filter-section-content pt-4 pb-2 space-y-2" style="max-height: 1000px;">
            <div class="flex items-center">
                <input id="rating-4-up" name="rating[]" value="4-up" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="rating-4-up" class="ml-3 text-sm text-gray-300 flex items-center">
                    <div class="flex items-center">
                        @for($i = 1; $i <= 4; $i++)
                            <svg class="h-4 w-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <span class="ml-1">& Up</span>
                </label>
            </div>
            <div class="flex items-center">
                <input id="rating-3-up" name="rating[]" value="3-up" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="rating-3-up" class="ml-3 text-sm text-gray-300 flex items-center">
                    <div class="flex items-center">
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
                    <span class="ml-1">& Up</span>
                </label>
            </div>
            <div class="flex items-center">
                <input id="rating-2-up" name="rating[]" value="2-up" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="rating-2-up" class="ml-3 text-sm text-gray-300 flex items-center">
                    <div class="flex items-center">
                        @for($i = 1; $i <= 2; $i++)
                            <svg class="h-4 w-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                        @for($i = 1; $i <= 3; $i++)
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <span class="ml-1">& Up</span>
                </label>
            </div>
            <div class="flex items-center">
                <input id="rating-1-up" name="rating[]" value="1-up" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="rating-1-up" class="ml-3 text-sm text-gray-300 flex items-center">
                    <div class="flex items-center">
                        <svg class="h-4 w-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        @for($i = 1; $i <= 4; $i++)
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                    <span class="ml-1">& Up</span>
                </label>
            </div>
        </div>
    </div>

    <!-- Availability Filter -->
    <div>
        <button type="button" class="filter-section-toggle flex w-full items-center justify-between text-sm text-white font-medium" aria-controls="filter-section-4" aria-expanded="true">
            <span>Availability</span>
            <span class="ml-6 flex items-center">
                <svg class="h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </button>
        <div class="filter-section-content pt-4 pb-2 space-y-2" style="max-height: 1000px;">
            <div class="flex items-center">
                <input id="availability-in-stock" name="availability[]" value="in-stock" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="availability-in-stock" class="ml-3 text-sm text-gray-300">In Stock</label>
            </div>
            <div class="flex items-center">
                <input id="availability-out-of-stock" name="availability[]" value="out-of-stock" type="checkbox" class="h-4 w-4 border-gray-700 rounded text-indigo-600 focus:ring-indigo-500 bg-gray-800">
                <label for="availability-out-of-stock" class="ml-3 text-sm text-gray-300">Out of Stock</label>
            </div>
        </div>
    </div>

    <!-- Apply Filters Button -->
    <div class="pt-4">
        <button type="button" class="w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Apply Filters
        </button>
    </div>
</div>
