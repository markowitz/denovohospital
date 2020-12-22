<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative py-4 w-full"  x-data="{ isOpen: false }">
    <div class="bg-white shadow w-full md:w-5/6 lg:w-5/6 md:mx-32 lg:mx-32 rounded-full">
      <div class="relative max-w-7xl mx-auto px-2 sm:px-6">
        <div class="flex justify-between items-center md:justify-start md:space-x-10">
          <div class="flex justify-start lg:w-full lg:flex-1">
            <a href="/">
              <span class="sr-only">Denovohospital Limited</span>
                  <img class="h-14 rounded-full float-left align-top" src="/images/logo_2.jpg" alt="denovo hospital logo">
                  <span class="inline-block mt-4 ml-2 font-medium">
                    <span class="text-green-600">Denovo</span> <span class="text-red-600">Hospital</span>
                  </span>
            </a>
          </div>
          <div class="md:hidden">
            <button @click="isOpen = !isOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Open menu</span>
              <!-- Heroicon name: menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <nav class="hidden md:flex space-x-10">
            <a href="/" class="text-sm font-bold  hover:text-green-500 {{(request()->is('/')) ? 'text-green-500 font-extrabold' : 'text-red-600'}}">
              HOME
            </a>
            <a href="/about" class="text-sm font-bold {{(request()->is('about')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} hover:text-green-500">
              ABOUT
            </a>
            <a href="/services" class="text-sm font-bold {{(request()->is('services')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} hover:text-green-500">
              SERVICES
            </a>
            <a href="/contact" class="text-sm font-bold {{(request()->is('contact')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} hover:text-green-500">
              CONTACT
            </a>
          </nav>
        </div>
      </div>

      <!--
        Mobile menu, show/hide based on mobile menu state.

        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden">
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-15 transform"
            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-15 transform" x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
              <div class="flex items-center justify-between">
                <div>
                  <img class="h-28" src="/images/denovo_logo.jpg" alt="Workflow">
                </div>
                <div class="-mr-2">
                  <button  @click="isOpen = !isOpen" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="py-6 px-5 space-y-6">
              <ul class="">
                <li class="text-base font-bold  hover:text-green-500 {{(request()->is('/')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} pb-4">
                  <a href="/">
                  HOME
                </a></li>

              <li class="text-base font-bold {{(request()->is('about')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} hover:text-green-500 py-4">
                <a href="/about">
                  ABOUT
                </a>
              </li>

                <li class="text-base font-bold {{(request()->is('services')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} hover:text-green-500 py-4">
                  <a href="/services">
                  SERVICES
                </a></li>

                <li class="text-base font-bold {{(request()->is('contact')) ? 'text-green-500 font-extrabold' : 'text-red-600'}} hover:text-green-500 py-4">
                  <a href="/contact">
                  CONTACT
                </a></li>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>