@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
  <!-- Hero Section -->
  <section class="relative bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
      <div class="md:w-2/3">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
          <span class="block">Contact</span>
          <span class="block text-indigo-500">Get in Touch</span>
        </h1>
        <p class="mt-6 text-xl text-gray-300 max-w-3xl">
          Have questions, feedback, or need assistance? We're here to help. Reach out to our team and we'll get back to you as soon as possible.
        </p>
      </div>
    </div>

    <!-- Decorative element -->
    <div class="hidden lg:block absolute right-0 top-1/2 transform -translate-y-1/2 w-1/3 h-3/4">
      <div class="w-full h-full bg-gradient-to-l from-indigo-600/20 to-transparent rounded-l-3xl"></div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="bg-gray-950 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div>
          <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden shadow-lg">
            <div class="px-6 py-8">
              <h2 class="text-2xl font-bold text-white mb-6">Send us a message</h2>
              <form action="#" method="POST">
                <div class="space-y-6">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                      <label for="first-name" class="block text-sm font-medium text-gray-300">First name</label>
                      <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>
                    <div>
                      <label for="last-name" class="block text-sm font-medium text-gray-300">Last name</label>
                      <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                    </div>
                  </div>

                  <div>
                    <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                    <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                  </div>

                  <div>
                    <label for="phone" class="block text-sm font-medium text-gray-300">Phone</label>
                    <input type="tel" name="phone" id="phone" autocomplete="tel" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white">
                  </div>

                  <div>
                    <label for="subject" class="block text-sm font-medium text-gray-300">Subject</label>
                    <select id="subject" name="subject" class="mt-1 block w-full py-2 px-3 border border-gray-700 bg-gray-800 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-white">
                      <option>General Inquiry</option>
                      <option>Product Support</option>
                      <option>Order Status</option>
                      <option>Returns & Refunds</option>
                      <option>Feedback</option>
                      <option>Other</option>
                    </select>
                  </div>

                  <div>
                    <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
                    <textarea id="message" name="message" rows="5" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-800 text-white"></textarea>
                  </div>

                  <div class="flex items-start">
                    <div class="flex items-center h-5">
                      <input id="terms" name="terms" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded bg-gray-800">
                    </div>
                    <div class="ml-3 text-sm">
                      <label for="terms" class="font-medium text-gray-300">I agree to the privacy policy</label>
                      <p class="text-gray-400">Your information will only be used to contact you regarding your inquiry.</p>
                    </div>
                  </div>

                  <div>
                    <button type="submit" class="w-full inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Contact Information -->
        <div>
          <div class="bg-gray-900 rounded-lg border border-gray-800 overflow-hidden shadow-lg">
            <div class="px-6 py-8">
              <h2 class="text-2xl font-bold text-white mb-6">Contact Information</h2>

              <div class="space-y-8">
                <div class="flex">
                  <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                  </div>
                  <div class="ml-3">
                    <h3 class="text-lg font-medium text-white">Phone</h3>
                    <p class="mt-1 text-gray-300">+1 (555) 123-4567</p>
                    <p class="mt-1 text-gray-400">Mon-Fri from 8am to 6pm</p>
                  </div>
                </div>

                <div class="flex">
                  <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <div class="ml-3">
                    <h3 class="text-lg font-medium text-white">Email</h3>
                    <p class="mt-1 text-gray-300">support@example.com</p>
                    <p class="mt-1 text-gray-400">We'll respond as soon as possible</p>
                  </div>
                </div>

                <div class="flex">
                  <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                  </div>
                  <div class="ml-3">
                    <h3 class="text-lg font-medium text-white">Address</h3>
                    <p class="mt-1 text-gray-300">123 Commerce Street</p>
                    <p class="mt-1 text-gray-300">Suite 500</p>
                    <p class="mt-1 text-gray-300">New York, NY 10001</p>
                  </div>
                </div>
              </div>

              <div class="mt-12">
                <h3 class="text-lg font-medium text-white mb-4">Follow Us</h3>
                <div class="flex space-x-6">
                  <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                    </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-white">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Map -->
          <div class="mt-8 bg-gray-900 rounded-lg border border-gray-800 overflow-hidden shadow-lg">
            <div class="aspect-w-16 aspect-h-9">
              <img src="https://via.placeholder.com/800x450/1F2937/FFFFFF/?text=Map" alt="Office location map" class="w-full h-full object-center object-cover">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="bg-gray-900 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-white">Frequently Asked Questions</h2>
        <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
          Find answers to common questions about our products and services.
        </p>
      </div>

      <div class="mt-12 max-w-3xl mx-auto">
        <div class="space-y-6">
          <!-- FAQ Item 1 -->
          <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <h3 class="text-lg font-medium text-white">How long does shipping take?</h3>
            <p class="mt-2 text-gray-300">Standard shipping typically takes 3-5 business days within the continental US. International shipping can take 7-14 business days depending on the destination.</p>
          </div>

          <!-- FAQ Item 2 -->
          <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <h3 class="text-lg font-medium text-white">What is your return policy?</h3>
            <p class="mt-2 text-gray-300">We offer a 30-day return policy for most items. Products must be returned in their original condition and packaging. Some items, such as personalized products, may not be eligible for return.</p>
          </div>

          <!-- FAQ Item 3 -->
          <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <h3 class="text-lg font-medium text-white">Do you offer international shipping?</h3>
            <p class="mt-2 text-gray-300">Yes, we ship to most countries worldwide. International shipping rates and delivery times vary by location. You can see the shipping options available during checkout.</p>
          </div>

          <!-- FAQ Item 4 -->
          <div class="bg-gray-800 rounded-lg p-6 border border-gray-700">
            <h3 class="text-lg font-medium text-white">How can I track my order?</h3>
            <p class="mt-2 text-gray-300">Once your order ships, you'll receive a confirmation email with tracking information. You can also track your order by logging into your account on our website.</p>
          </div>
        </div>

        <div class="mt-8 text-center">
          <p class="text-gray-300">
            Still have questions?
            <a href="#" class="font-medium text-indigo-500 hover:text-indigo-400">Contact our support team</a>
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
