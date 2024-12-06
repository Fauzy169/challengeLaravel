<x-layout>
    
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="bg-white py-2 sm:py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">What's New !?</h2>
            <p class="mt-2 text-lg/8 text-gray-600">Dapatkan Produk terbaru dan barang murah setiap harinya</p>
          </div>
          <div class="mt-3"><a href="/products/create"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Product Baru</button></a></div>
          <div class="mx-auto mt-5 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-5 sm:pt-5 lg:mx-0 lg:max-w-none lg:grid-cols-3">

          </div>
          
        </div>
      </div>
      
</x-layout>