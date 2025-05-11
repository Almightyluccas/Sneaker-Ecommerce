<div class="group relative bg-gray-900 rounded-lg overflow-hidden border border-gray-800 transition-all duration-300 hover:border-gray-700 hover:shadow-lg hover:shadow-indigo-500/10">
    <div class="relative aspect-square overflow-hidden bg-gray-800">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300">

        @if(isset($isNew) && $isNew)
            <div class="absolute top-2 left-2 bg-indigo-600 text-white text-xs font-bold px-2 py-1 rounded">New</div>
        @endif

        @if(isset($isSale) && $isSale)
            <div class="absolute top-2 left-2 bg-rose-600 text-white text-xs font-bold px-2 py-1 rounded">Sale</div>
        @endif


        <div class="absolute bottom-0 left-0 right-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 flex space-x-2">
            <button class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-150">
                Add to Cart
            </button>
            <button class="flex-shrink-0 bg-gray-800 hover:bg-gray-700 text-white p-2 rounded-md transition duration-150">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="p-4">
        <h3 class="text-sm font-medium text-white">{{ $name }}</h3>
        <div class="mt-1 flex items-center">
            @if(isset($isSale) && $isSale)
                <span class="text-sm font-medium text-indigo-500">${{ number_format($price * 0.8, 2) }}</span>
                <span class="ml-2 text-sm text-gray-500 line-through">${{ number_format($price, 2) }}</span>
            @else
                <span class="text-sm font-medium text-indigo-500">${{ number_format($price, 2) }}</span>
            @endif
        </div>
        <div class="mt-2 flex items-center">
            <div class="flex items-center">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= 4)
                        <svg class="h-4 w-4 text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @else
                        <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endif
                @endfor
            </div>
            <span class="ml-1 text-xs text-gray-500">({{ rand(10, 100) }})</span>
        </div>
    </div>
</div>
