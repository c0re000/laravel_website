<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="sr-only">Products</h2>



    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://th.bing.com/th/id/OIP.fhJr0_Mm0Rpfj9lsypXVhQHaHa?rs=1&pid=ImgDetMain" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">GTX 75</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$130</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://th.bing.com/th/id/R.db0ea772da9cf96cdc4807e012332f00?rik=6xt6nhaBzjGPEg&pid=ImgRaw&r=0" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">GT 1030 528MB</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$115</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://th.bing.com/th/id/R.29d5c9f1b2827e35de95edfbd1f3e10b?rik=j2p5tln7zu%2fbqg&pid=ImgRaw&r=0" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">GTX 16</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$119</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://th.bing.com/th/id/R.e4c03de635a2542e5625db6418ef21bc?rik=AT%2fzYoUDRS5qjQ&pid=ImgRaw&r=0" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">RO 75</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$154</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.nativeskatestore.co.uk/images/toxic-hand-80s-cruzer-skateboard-9-7-x-31-7-p57341-132963_image.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">HD4114</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$266</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.nativeskatestore.co.uk/images/santa-cruz-skateboards-off-hand-complete-skateboard-7-75-x-31-4-p45998-114299_medium.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">RX 455</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$340</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://th.bing.com/th/id/OIP.H8UdzcIQxW_Gd_w1vSVTbgHaHW?w=1000&h=993&rs=1&pid=ImgDetMain" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">RX 455</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$340</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://th.bing.com/th/id/OIP.-Py4r5StjL_A3U-uey9epQHaHa?w=800&h=800&rs=1&pid=ImgDetMain" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">RX 455</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$299</p>
        <button type="button">Plačiau</button>
      </a>
      <a href="#" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
          <img src="https://www.nativeskatestore.co.uk/images/lil-monsters-blue-complete-skateboard-7-75-p50575-122476_image.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">RX 455</h3>
        <p class="mt-1 text-lg font-medium text-gray-900">$300</p>
        <button type="button">Plačiau</button>
      </a>
      <br>
      <button type="button">Prideti prekę</button>

      <!-- More products... -->
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
