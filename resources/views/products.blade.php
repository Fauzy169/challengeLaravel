<x-layout>
    
    <x-slot:title>{{ $title }}</x-slot:title>
    
  
    <div class="bg-white py-2 sm:py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">What's New !?</h2>
            <p class="mt-2 text-lg/8 text-gray-600">Dapatkan berita terbaru dan informasi update sehari-hari</p>
          </div>
          <div class="mx-auto mt-5 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-5 sm:pt-5 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            @foreach ( $product as $product )
              
            <article class="flex max-w-xl flex-col items-start justify-between">
                <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80 my-5">
              <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">{{ $product->created_at->format('j F Y') }}</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                  <a href="/products/{{$product['slug']}}" class="hover:underline">
                    <span class="absolute inset-0" ></span>
                    {{ $product['judul'] }}
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{ $product['body'] }}</p>
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-50">
                <div class="text-sm/6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{ $product['nama'] }}
                    </a>
                  </p>
                  <p class="text-gray-600">{{ $product['jabatan'] }}</p>
                </div>
              </div>
            </article>
            
            @endforeach
      
            <!-- More posts... -->
          </div>
          
        </div>
      </div>
      
</x-layout>