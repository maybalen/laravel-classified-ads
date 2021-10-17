<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
      <header>
        <div class="w-full bg-center bg-cover m-5 p-5">
            <div class="flex items-center justify-center w-full h-full bg-opacity-50">
                <div class="text-center">
    
                  <x-search></x-search>
                
                </div>
            </div>
        </div>
    </header>
    </section>

    <section>

        <div class="bg-white">
            <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
              <h2 class="sr-only">Listings</h2>
          
              <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                
                @foreach ($listings as $listing)                
                <a href="#" class="group">
                  <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="{{ Storage::url($listing->featured_image) }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
                  </div>
                  <p class="mt-4 text-sm text-gray-500">
                    {{ $listing->category->name }}
                  </p>
                  <h3 class="text-md font-bold text-gray-700">
                    {{ $listing->title }}
                  </h3>
                  <p class="mt-1 text-lg font-medium text-gray-900">
                    ${{ $listing->price }}
                  </p>
                </a>          
                @endforeach

              </div>
            </div>
          </div>

    </section>

    
    <x-main-footer></x-main-footer>    
</x-main-layout>