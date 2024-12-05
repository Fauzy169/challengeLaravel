<nav class="bg-gray-800" x-data="{ isOpen: false, isDropdownOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
              <div class="shrink-0">
                  <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">
                      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                      <x-nav-link href="/products" :active="request()->is('products')">Product</x-nav-link>
                      <x-nav-link href="/shop" :active="request()->is('shop')">Shop</x-nav-link>
                  </div>
              </div>
          </div>
          <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                  @auth
                  <!-- Dropdown -->
                  <div class="relative">
                      <button @click="isDropdownOpen = !isDropdownOpen" class="flex items-center text-gray-300 hover:text-white focus:outline-none">
                          <span>{{ auth()->user()->name }}</span>
                          <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                          </svg>
                      </button>
                      <div x-show="isDropdownOpen" @click.away="isDropdownOpen = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20">
                          <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                          <div class="border-t border-gray-100">
                            <form action="/logout" method="post">
                              @csrf
                              <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                            </form>
                          </div>
                      </div>
                  </div>
                  @else
                  <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                  @endauth
              </div>
          </div>
          <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="sr-only">Open main menu</span>
                  <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>
      </div>
  </div>

  <!-- Mobile menu -->
  <div x-show="isOpen" class="md:hidden">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <x-nav-link href="/products" :active="request()->is('products')">Product</x-nav-link>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
          @auth
          <div class="px-5">
              <div class="text-base font-medium text-white">{{ auth()->user()->name }}</div>
              <a href="#" class="block mt-2 text-sm text-gray-400 hover:text-white">Sign out</a>
          </div>
          @else
          <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
          @endauth
      </div>
  </div>
</nav>
