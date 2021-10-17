<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Listing') }}
      </h2>
  </x-slot>

  <div class="container mx-auto">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">

  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

<!-- form -->
<div class="container items-center px-5 py-12 lg:px-20">
<div class="mt-5 md:mt-0 md:col-span-2">
  <form action="{{ route('listings.update', $listing->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-gray-300 border rounded-lg lg:w-1/2 ">
      @csrf
      @method('PUT')
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-3">
            <label for="condition" class="block text-sm font-medium text-gray-700">
              Condition
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <select name="condition" id="condition" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                <option value="new" {{ $listing->condition == 'new' ? 'selected' : '' }}>New</option>                      
                <option value="used"{{ $listing->condition == 'used' ? 'selected' : '' }}>Used</option>                      
              </select>
            </div>
              @error('condition')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="col-span-3">
            <label for="is_published" class="block text-sm font-medium text-gray-700">
              Published
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <select name="is_published" id="is_published" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                <option value="0" {{ $listing->is_published == '0' ? 'selected' : '' }}>Unpublished</option>                      
                <option value="1" {{ $listing->is_published == '1' ? 'selected' : '' }}>Published</option>                      
              </select>
            </div>
              @error('is_published')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        </div>

        {{-- Category - SubCategory - ChildCategory --}}
        @livewire('depended-edit-category', ['category' => $listing->category_id, 'subCategory' => $listing->sub_category_id, 'childCategory' => $listing->child_category_id])

        <div class="grid grid-cols-1 gap-6">
          <div class="col-span-3 sm:col-span-2">
            <label for="title" class="block text-sm font-medium text-gray-700">
              Title
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <input type="text" name="title" id="title" value="{{ $listing->title }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Listing Title">
            </div>

              @error('title')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

          </div>
        </div>

        <div class="grid grid-cols-1 gap-6">
          <div class="col-span-3 sm:col-span-2">
            <label for="description" class="block text-sm font-medium text-gray-700">
              Description
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <textarea type="text" name="description" id="description" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">{{ $listing->description }}</textarea>
            </div>

              @error('description')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

          </div>
        </div>

        <div class="grid grid-cols-9 gap-6">
          <div class="col-span-6">
            <label for="price" class="block text-sm font-medium text-gray-700">
              Price
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <input type="text" name="price" id="price" value="{{ $listing->price }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
            </div>
              @error('price')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="col-span-3">
            <label for="price_negotiable" class="block text-sm font-medium text-gray-700">
              Price Negotiable
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <select name="price_negotiable" id="price_negotiable" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                <option value="fixed" {{ $listing->price_negotiable == 'fixed' ? 'selected' : '' }}>Fixed</option>                      
                <option value="negotiable" {{ $listing->price_negotiable == 'negotiable' ? 'selected' : '' }}>Negotiable</option>                      
              </select>
            </div>
              @error('price_negotiable')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

        </div>

        <div class="grid grid-cols-1 gap-6">
          <div class="col-span-3 sm:col-span-2">
            <label for="location" class="block text-sm font-medium text-gray-700">
              Location
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <input type="text" name="location" id="location" value="{{ $listing->location }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
            </div>

              @error('location')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

          </div>
        </div>

        {{-- Country - State - City --}}
        @livewire('depended-edit-country', ['country' => $listing->country_id, 'state' => $listing->state_id, 'city' => $listing->city_id])

        <div class="grid grid-cols-1 gap-6">
          <div class="col-span-3 sm:col-span-2">
            <label for="phone_number" class="block text-sm font-medium text-gray-700">
              Phone Number
            </label>
            <div class="mt-1 flex rounded-md shadow-sm">
              <input type="number" name="phone_number" id="phone_number" value="{{ $listing->phone_number }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
            </div>

              @error('phone_number')
                  <span class="text-red-500 invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

          </div>
        </div>

        {{-- Image --}}
        @livewire('edit-image-preview', ['oldFeaturedImage' => $listing->featured_image, 'oldImageOne' => $listing->image_one, 'oldImageTwo' => $listing->image_two, 'oldImageThree' => $listing->image_three])

      </div>
      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Save
        </button>
      </div>
    </div>
  </form>
</div>

</div>
<!-- form -->

    </div>
  </div>
</div>

  </div>
</x-app-layout>
