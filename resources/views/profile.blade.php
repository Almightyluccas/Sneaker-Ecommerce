@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="md:flex md:items-center md:justify-between mb-8">
      <div class="flex-1 min-w-0">
        <h1 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
          My Profile
        </h1>
      </div>
    </div>

    <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg border border-gray-800">
      <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
        <div class="flex items-center">
          <div class="flex-shrink-0 h-16 w-16">
            <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile picture">
          </div>
          <div class="ml-4 flex-1">
            <h3 class="text-lg leading-6 font-medium text-white">
              John Doe
            </h3>
            <p class="text-sm text-gray-400">
              Member since January 2023
            </p>
          </div>
          <div>
            <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Edit Profile
            </button>
          </div>
        </div>
      </div>

      <div class="border-t border-gray-800">
        <dl>
          <div class="bg-gray-900 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-400">
              Full name
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
              John Doe
            </dd>
          </div>
          <div class="bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-400">
              Email address
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
              john.doe@example.com
            </dd>
          </div>
          <div class="bg-gray-900 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-400">
              Phone number
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
              +1 (555) 123-4567
            </dd>
          </div>
          <div class="bg-gray-800 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-400">
              Address
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
              123 Main Street<br>
              Apt 4B<br>
              New York, NY 10001<br>
              United States
            </dd>
          </div>
        </dl>
      </div>
    </div>

    <!-- Recent Orders -->
    <div class="mt-12">
      <h2 class="text-xl font-bold text-white mb-6">Recent Orders</h2>

      <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg border border-gray-800">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-800">
            <thead class="bg-gray-800">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                Order ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                Date
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                Total
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                Actions
              </th>
            </tr>
            </thead>
            <tbody class="bg-gray-900 divide-y divide-gray-800">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                #ORD-2023-8756
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                May 12, 2023
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Delivered
                                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                $249.99
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                <a href="#" class="text-indigo-500 hover:text-indigo-400">View</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                #ORD-2023-7532
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                April 28, 2023
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Delivered
                                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                $129.99
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                <a href="#" class="text-indigo-500 hover:text-indigo-400">View</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                #ORD-2023-6421
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                March 15, 2023
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Shipped
                                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                $349.99
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                <a href="#" class="text-indigo-500 hover:text-indigo-400">View</a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="bg-gray-900 px-4 py-3 border-t border-gray-800 sm:px-6">
          <div class="flex justify-between items-center">
            <div class="text-sm text-gray-400">
              Showing 3 of 12 orders
            </div>
            <div>
              <a href="#" class="inline-flex items-center px-4 py-2 border border-gray-700 text-sm font-medium rounded-md text-white bg-gray-800 hover:bg-gray-700">
                View All Orders
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Wishlist -->
    <div class="mt-12">
      <h2 class="text-xl font-bold text-white mb-6">My Wishlist</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @for ($i = 1; $i <= 4; $i++)
          <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden hover:border-indigo-500 transition-colors duration-300">
            <div class="aspect-w-1 aspect-h-1 bg-gray-800">
              <img src="https://via.placeholder.com/300/1F2937/FFFFFF/?text=Wishlist+Item+{{ $i }}" alt="Wishlist item" class="w-full h-full object-center object-cover">
            </div>
            <div class="p-4">
              <h3 class="text-sm font-medium text-white">Wishlist Item {{ $i }}</h3>
              <p class="mt-1 text-sm text-gray-400">Premium quality product with amazing features</p>
              <div class="mt-2 flex justify-between items-center">
                <p class="text-lg font-medium text-white">${{ 49.99 * $i }}</p>
                <div class="flex space-x-2">
                  <button type="button" class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </button>
                  <button type="button" class="inline-flex items-center p-1 border border-transparent rounded-full shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </div>
@endsection
