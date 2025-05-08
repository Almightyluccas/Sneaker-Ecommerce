@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="md:flex md:items-center md:justify-between mb-8">
      <div class="flex-1 min-w-0">
        <h1 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
          Checkout
        </h1>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Order Summary -->
      <div class="lg:col-span-2">
        <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg border border-gray-800 mb-6">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Order Summary
            </h3>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <div class="flow-root">
              <ul role="list" class="-my-6 divide-y divide-gray-800">
                <li class="py-6 flex">
                  <div class="flex-shrink-0 w-24 h-24 border border-gray-800 rounded-md overflow-hidden">
                    <img src="https://via.placeholder.com/300/1F2937/FFFFFF/?text=Headphones" alt="Premium Wireless Headphones" class="w-full h-full object-center object-cover">
                  </div>

                  <div class="ml-4 flex-1 flex flex-col">
                    <div>
                      <div class="flex justify-between text-base font-medium text-white">
                        <h3>
                          <a href="#">Premium Wireless Headphones</a>
                        </h3>
                        <p class="ml-4">
                          $129.99
                        </p>
                      </div>
                      <p class="mt-1 text-sm text-gray-400">
                        Black
                      </p>
                    </div>
                    <div class="flex-1 flex items-end justify-between text-sm">
                      <p class="text-gray-400">
                        Qty 1
                      </p>

                      <div class="flex">
                        <button type="button" class="font-medium text-indigo-500 hover:text-indigo-400">
                          Remove
                        </button>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="py-6 flex">
                  <div class="flex-shrink-0 w-24 h-24 border border-gray-800 rounded-md overflow-hidden">
                    <img src="https://via.placeholder.com/300/1F2937/FFFFFF/?text=SmartWatch" alt="Smart Watch" class="w-full h-full object-center object-cover">
                  </div>

                  <div class="ml-4 flex-1 flex flex-col">
                    <div>
                      <div class="flex justify-between text-base font-medium text-white">
                        <h3>
                          <a href="#">Smart Watch Series 5</a>
                        </h3>
                        <p class="ml-4">
                          $249.99
                        </p>
                      </div>
                      <p class="mt-1 text-sm text-gray-400">
                        Silver
                      </p>
                    </div>
                    <div class="flex-1 flex items-end justify-between text-sm">
                      <p class="text-gray-400">
                        Qty 1
                      </p>

                      <div class="flex">
                        <button type="button" class="font-medium text-indigo-500 hover:text-indigo-400">
                          Remove
                        </button>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Shipping Information -->
        <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg border border-gray-800 mb-6">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Shipping Information
            </h3>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <form action="#" method="POST">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-300">First name</label>
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-300">Last name</label>
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-300">Email address</label>
                  <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="phone-number" class="block text-sm font-medium text-gray-300">Phone number</label>
                  <input type="text" name="phone-number" id="phone-number" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-300">Street address</label>
                  <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-300">City</label>
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="region" class="block text-sm font-medium text-gray-300">State / Province</label>
                  <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-300">ZIP / Postal code</label>
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6">
                  <label for="country" class="block text-sm font-medium text-gray-300">Country</label>
                  <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-white">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    <option>United Kingdom</option>
                    <option>Germany</option>
                    <option>France</option>
                    <option>Japan</option>
                    <option>Australia</option>
                  </select>
                </div>

                <div class="col-span-6">
                  <label for="shipping-notes" class="block text-sm font-medium text-gray-300">Delivery instructions (optional)</label>
                  <textarea id="shipping-notes" name="shipping-notes" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Payment Method -->
        <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg border border-gray-800">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Payment Method
            </h3>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <form action="#" method="POST">
              <div class="space-y-6">
                <fieldset>
                  <legend class="text-sm font-medium text-white">Payment Type</legend>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                      <input id="credit-card" name="payment-type" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 bg-gray-800">
                      <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-300">
                        Credit Card
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="paypal" name="payment-type" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 bg-gray-800">
                      <label for="paypal" class="ml-3 block text-sm font-medium text-gray-300">
                        PayPal
                      </label>
                    </div>
                  </div>
                </fieldset>

                <div id="credit-card-form" class="mt-6">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                      <label for="card-number" class="block text-sm font-medium text-gray-300">Card number</label>
                      <input type="text" name="card-number" id="card-number" autocomplete="cc-number" placeholder="1234 1234 1234 1234" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                      <label for="name-on-card" class="block text-sm font-medium text-gray-300">Name on card</label>
                      <input type="text" name="name-on-card" id="name-on-card" autocomplete="cc-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>

                    <div class="col-span-3 sm:col-span-1">
                      <label for="expiration-month" class="block text-sm font-medium text-gray-300">Month</label>
                      <select id="expiration-month" name="expiration-month" autocomplete="cc-exp-month" class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-white">
                        @for ($i = 1; $i <= 12; $i++)
                          <option>{{ sprintf('%02d', $i) }}</option>
                        @endfor
                      </select>
                    </div>

                    <div class="col-span-3 sm:col-span-1">
                      <label for="expiration-year" class="block text-sm font-medium text-gray-300">Year</label>
                      <select id="expiration-year" name="expiration-year" autocomplete="cc-exp-year" class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-white">
                        @for ($i = date('Y'); $i <= date('Y') + 10; $i++)
                          <option>{{ $i }}</option>
                        @endfor
                      </select>
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                      <label for="cvc" class="block text-sm font-medium text-gray-300">CVC</label>
                      <input type="text" name="cvc" id="cvc" autocomplete="cc-csc" placeholder="123" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Order Total -->
      <div class="lg:col-span-1">
        <div class="bg-gray-900 shadow overflow-hidden sm:rounded-lg border border-gray-800 sticky top-6">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Order Total
            </h3>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <div class="flow-root">
              <dl class="-my-4 text-sm divide-y divide-gray-800">
                <div class="py-4 flex items-center justify-between">
                  <dt class="text-gray-400">Subtotal</dt>
                  <dd class="font-medium text-white">$379.98</dd>
                </div>

                <div class="py-4 flex items-center justify-between">
                  <dt class="text-gray-400">Shipping</dt>
                  <dd class="font-medium text-white">$9.99</dd>
                </div>

                <div class="py-4 flex items-center justify-between">
                  <dt class="text-gray-400">Tax</dt>
                  <dd class="font-medium text-white">$38.00</dd>
                </div>

                <div class="py-4 flex items-center justify-between">
                  <dt class="text-base font-medium text-white">Total</dt>
                  <dd class="text-base font-medium text-white">$427.97</dd>
                </div>
              </dl>
            </div>

            <div class="mt-6">
              <div class="relative">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                  <div class="w-full border-t border-gray-800"></div>
                </div>
                <div class="relative flex justify-center">
                                <span class="px-2 bg-gray-900 text-sm text-gray-400">
                                    Have a promo code?
                                </span>
                </div>
              </div>

              <div class="mt-4 flex space-x-2">
                <input type="text" name="promo-code" id="promo-code" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white" placeholder="Enter code">
                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Apply
                </button>
              </div>
            </div>

            <div class="mt-6">
              <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Complete Order
              </button>
            </div>

            <div class="mt-6 text-center">
              <p class="text-sm text-gray-400">
                By placing your order, you agree to our
                <a href="#" class="font-medium text-indigo-500 hover:text-indigo-400">Terms and Conditions</a>
                and
                <a href="#" class="font-medium text-indigo-500 hover:text-indigo-400">Privacy Policy</a>.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
