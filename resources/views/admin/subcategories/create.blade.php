<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Sub Category') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="flex justify-start">
        <a href="{{ route('admin.subcategories.index') }}" class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50 rounded-md">Back</a>
    </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

<!-- form -->
<div class="container items-center px-5 py-12 lg:px-20">
<div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{ route('admin.subcategories.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-gray-300 border rounded-lg lg:w-1/2 ">
        @csrf
      <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                Category
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <select name="category_id" id="category_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                  @foreach (App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>                      
                  @endforeach
                </select>

              </div>

                @error('category_id')
                    <span class="text-red-500 invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
          </div>

          <div class="grid grid-cols-3 gap-6">
            <div class="col-span-3 sm:col-span-2">
              <label for="company-website" class="block text-sm font-medium text-gray-700">
                Title
              </label>
              <div class="mt-1 flex rounded-md shadow-sm">
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Category Title">
              </div>

                @error('name')
                    <span class="text-red-500 invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700">
              Image
            </label>
            @error('image')
              <span class="text-red-500 invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
             @enderror
            <div class="mt-1 flex items-center">
                <input type="file" id="image" name="image" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" />             
            </div>
          </div>

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
</x-admin-layout>
