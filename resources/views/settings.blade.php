@extends('layouts.app')

@section('title', 'Account Settings')

@section('content')
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="md:flex md:items-center md:justify-between mb-8">
      <div class="flex-1 min-w-0">
        <h1 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
          Account Settings
        </h1>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
      <!-- Sidebar -->
      <div class="md:col-span-1">
        <div class="bg-gray-900 shadow rounded-lg border border-gray-800 overflow-hidden">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Settings
            </h3>
          </div>
          <div class="bg-gray-900">
            <nav class="space-y-1">
              <a href="#profile" class="bg-gray-800 text-white group flex items-center px-3 py-2 text-sm font-medium" aria-current="page">
                <svg class="text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Profile
              </a>

              <a href="#account" class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-3 py-2 text-sm font-medium">
                <svg class="text-gray-400 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Account
              </a>

              <a href="#security" class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-3 py-2 text-sm font-medium">
                <svg class="text-gray-400 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                Security
              </a>

              <a href="#notifications" class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-3 py-2 text-sm font-medium">
                <svg class="text-gray-400 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                Notifications
              </a>

              <a href="#billing" class="text-gray-300 hover:bg-gray-800 hover:text-white group flex items-center px-3 py-2 text-sm font-medium">
                <svg class="text-gray-400 group-hover:text-white mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
                Billing
              </a>
            </nav>
          </div>
        </div>
      </div>

      <!-- Main content -->
      <div class="md:col-span-3">
        <!-- Profile Section -->
        <div id="profile" class="bg-gray-900 shadow rounded-lg border border-gray-800 overflow-hidden mb-6">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Profile Information
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-400">
              Update your personal details and profile picture.
            </p>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <form action="#" method="POST">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-300">First name</label>
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" value="John" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-300">Last name</label>
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" value="Doe" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-300">Email address</label>
                  <input type="text" name="email-address" id="email-address" autocomplete="email" value="john.doe@example.com" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="phone-number" class="block text-sm font-medium text-gray-300">Phone number</label>
                  <input type="text" name="phone-number" id="phone-number" autocomplete="tel" value="+1 (555) 123-4567" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-300">Street address</label>
                  <input type="text" name="street-address" id="street-address" autocomplete="street-address" value="123 Main Street" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-300">City</label>
                  <input type="text" name="city" id="city" autocomplete="address-level2" value="New York" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="region" class="block text-sm font-medium text-gray-300">State / Province</label>
                  <input type="text" name="region" id="region" autocomplete="address-level1" value="NY" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-300">ZIP / Postal code</label>
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" value="10001" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                </div>
              </div>

              <div class="mt-6">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-16 w-16 relative rounded-full overflow-hidden">
                    <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Profile picture">
                  </div>
                  <div class="ml-5">
                    <label for="profile-photo" class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-3 border border-gray-700 rounded-md text-sm font-medium cursor-pointer">
                      Change photo
                      <input id="profile-photo" name="profile-photo" type="file" class="sr-only">
                    </label>
                    <p class="mt-1 text-xs text-gray-400">JPG, GIF or PNG. 1MB max.</p>
                  </div>
                </div>
              </div>

              <div class="mt-6 flex justify-end">
                <button type="button" class="bg-gray-800 py-2 px-4 border border-gray-700 rounded-md shadow-sm text-sm font-medium text-gray-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Cancel
                </button>
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Security Section -->
        <div id="security" class="bg-gray-900 shadow rounded-lg border border-gray-800 overflow-hidden mb-6">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Security Settings
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-400">
              Manage your password and security preferences.
            </p>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <form action="#" method="POST">
              <div class="space-y-6">
                <div>
                  <h4 class="text-sm font-medium text-white">Change Password</h4>
                  <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-4">
                    <div class="sm:col-span-4">
                      <label for="current-password" class="block text-sm font-medium text-gray-300">Current password</label>
                      <input type="password" name="current-password" id="current-password" autocomplete="current-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>

                    <div class="sm:col-span-4">
                      <label for="new-password" class="block text-sm font-medium text-gray-300">New password</label>
                      <input type="password" name="new-password" id="new-password" autocomplete="new-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>

                    <div class="sm:col-span-4">
                      <label for="confirm-password" class="block text-sm font-medium text-gray-300">Confirm password</label>
                      <input type="password" name="confirm-password" id="confirm-password" autocomplete="new-password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>
                  </div>
                </div>

                <div class="pt-6 border-t border-gray-800">
                  <h4 class="text-sm font-medium text-white">Two-Factor Authentication</h4>
                  <div class="mt-4">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="two-factor" name="two-factor" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded bg-gray-800">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="two-factor" class="font-medium text-gray-300">Enable two-factor authentication</label>
                        <p class="text-gray-400">Add an extra layer of security to your account by requiring both your password and a verification code.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pt-6 border-t border-gray-800">
                  <h4 class="text-sm font-medium text-white">Sessions</h4>
                  <div class="mt-4">
                    <div class="bg-gray-800 rounded-md p-4">
                      <div class="flex">
                        <div class="flex-shrink-0">
                          <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <div class="ml-3 flex-1 md:flex md:justify-between">
                          <p class="text-sm text-gray-300">Current session (New York, USA)</p>
                          <p class="mt-3 text-sm md:mt-0 md:ml-6">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Active now</span>
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="mt-2">
                      <button type="button" class="text-sm font-medium text-indigo-500 hover:text-indigo-400">
                        Sign out of all other sessions
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-6 flex justify-end">
                <button type="button" class="bg-gray-800 py-2 px-4 border border-gray-700 rounded-md shadow-sm text-sm font-medium text-gray-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Cancel
                </button>
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Notifications Section -->
        <div id="notifications" class="bg-gray-900 shadow rounded-lg border border-gray-800 overflow-hidden">
          <div class="px-4 py-5 sm:px-6 border-b border-gray-800">
            <h3 class="text-lg leading-6 font-medium text-white">
              Notification Settings
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-400">
              Manage how and when we contact you.
            </p>
          </div>
          <div class="px-4 py-5 sm:p-6">
            <form action="#" method="POST">
              <div class="space-y-6">
                <fieldset>
                  <legend class="text-sm font-medium text-white">By Email</legend>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="comments" name="comments" type="checkbox" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded bg-gray-800">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="comments" class="font-medium text-gray-300">Order updates</label>
                        <p class="text-gray-400">Get notified when your order status changes.</p>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="candidates" name="candidates" type="checkbox" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded bg-gray-800">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="candidates" class="font-medium text-gray-300">Promotions and sales</label>
                        <p class="text-gray-400">Get notified about special offers and discounts.</p>
                      </div>
                    </div>
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="offers" name="offers" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded bg-gray-800">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="offers" class="font-medium text-gray-300">Product updates</label>
                        <p class="text-gray-400">Get notified when products you've purchased receive updates.</p>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="pt-6 border-t border-gray-800">
                  <legend class="text-sm font-medium text-white">Push Notifications</legend>
                  <p class="text-sm text-gray-400">These are delivered via SMS to your mobile phone.</p>
                  <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                      <input id="push-everything" name="push-notifications" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 bg-gray-800">
                      <label for="push-everything" class="ml-3 block text-sm font-medium text-gray-300">
                        Everything
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="push-email" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 bg-gray-800">
                      <label for="push-email" class="ml-3 block text-sm font-medium text-gray-300">
                        Same as email
                      </label>
                    </div>
                    <div class="flex items-center">
                      <input id="push-nothing" name="push-notifications" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 bg-gray-800">
                      <label for="push-nothing" class="ml-3 block text-sm font-medium text-gray-300">
                        No push notifications
                      </label>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div class="mt-6 flex justify-end">
                <button type="button" class="bg-gray-800 py-2 px-4 border border-gray-700 rounded-md shadow-sm text-sm font-medium text-gray-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Cancel
                </button>
                <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
