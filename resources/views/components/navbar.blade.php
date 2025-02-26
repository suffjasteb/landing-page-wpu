<nav class="flex items-center justify-between  p-6 lg:px-8 bg-white-1000 " aria-label="Global" x-data="{ isOpen: false }">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>

    <!-- Navbar Desktop (Tampil di layar besar) -->
    <div class="block lg:flex lg:gap-x-12">
      <x-nav-link href="/belajar-laravel/public/product" :active="request()->is('product')">
        Product
    </x-nav-link>
    <x-nav-link href="/belajar-laravel/public/features" :active="request()->is('features')">
        Features
    </x-nav-link>
    <x-nav-link href="/belajar-laravel/public/marketplace" :active="request()->is('marketplace')">
        Marketplace
    </x-nav-link>
    <x-nav-link href="/belajar-laravel/public/company" :active="request()->is('company')">
        Company
    </x-nav-link>
    
        
    <!-- Tombol Toggle (Hanya tampil di layar kecil) -->
    <button @click="isOpen = !isOpen" class="lg:flex -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 ">
      <span class="sr-only">Open main menu</span>
      <svg x-show="!isOpen" class="size-6 cursor-pointer ml-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
      <svg x-show="isOpen" class="size-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Menu Mobile (Hanya tampil di layar kecil) -->
    <div x-show="isOpen" x-transition class="lg:block fixed inset-y-0 right-0 z-50 w-64 bg-pink-800  px-6 py-6 sm:ring-1 sm:ring-gray-900/10 ">
      <button @click="isOpen = false" class="-m-2.5 rounded-md p-2.5 text-gray-700">
        <span class="sr-only ">Close menu</span>
        <svg class="size-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
      </button>


      <div class="mt-6">
        <a href="/belajar-laravel/public/" class="block px-3 py-2 text-base font-semibold text-white hover:bg-black">Home</a>
        <a href="/belajar-laravel/public/posts" class="block px-3 py-2 text-base font-semibold text-white hover:bg-black">Blog</a>
        <a href="/belajar-laravel/public/about" class="block px-3 py-2 text-base font-semibold text-white hover:bg-black">About</a>
        <a href="/belajar-laravel/public/contact" class="block px-3 py-2 text-base font-semibold text-white hover:bg-black">Contact</a>
      </div>
    </div>
  </nav>