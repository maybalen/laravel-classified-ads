<div class="grid grid-cols-1 gap-6">
    <div class="col-span-3 sm:col-span-2">
        <label class="block text-sm font-medium text-gray-700">
          Featured Image
        </label>
        @error('featured_image')
          <span class="text-red-500 invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror

        <div class="flex">
            <div class="col-span-3">
                    @if ($oldFeaturedImage)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Current Image</p>            
                    <div class="flex items-center mr-5">             
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ Storage::url($oldFeaturedImage) }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="col-span-3">    
                    @if ($featuredImage)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">New Image</p>
                    <div class="flex items-center mr-5">            
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ $featuredImage->temporaryUrl() }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="flex items-center mr-5">    
                <input wire:model="featuredImage" type="file" id="featured_image" name="featured_image" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" />             
            </div>
        </div>

    </div>

    <div class="col-span-3 sm:col-span-2">
        <label class="block text-sm font-medium text-gray-700">
          Image One
        </label>
        @error('image_one')
          <span class="text-red-500 invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror


        <div class="flex">
            <div class="col-span-3">
                    @if ($oldImageOne)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Current Image</p>            
                    <div class="flex items-center mr-5">             
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ Storage::url($oldImageOne) }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="col-span-3">    
                    @if ($imageOne)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">New Image</p>
                    <div class="flex items-center mr-5">            
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ $imageOne->temporaryUrl() }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="flex items-center mr-5">    
                <input wire:model="imageOne" type="file" id="image_one" name="image_one" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" />             
            </div>
        </div>

    </div>

    <div class="col-span-3 sm:col-span-2">
        <label class="block text-sm font-medium text-gray-700">
          Image Two
        </label>
        @error('image_one')
          <span class="text-red-500 invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror


        <div class="flex">
            <div class="col-span-3">
                    @if ($oldImageTwo)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Current Image</p>            
                    <div class="flex items-center mr-5">             
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ Storage::url($oldImageTwo) }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="col-span-3">    
                    @if ($imageTwo)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">New Image</p>
                    <div class="flex items-center mr-5">            
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ $imageTwo->temporaryUrl() }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="flex items-center mr-5">    
                <input wire:model="imageTwo" type="file" id="image_two" name="image_two" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" />             
            </div>
        </div>

    </div>   
    
    <div class="col-span-3 sm:col-span-2">
        <label class="block text-sm font-medium text-gray-700">
          Image Two
        </label>
        @error('image_one')
          <span class="text-red-500 invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
         @enderror


        <div class="flex">
            <div class="col-span-3">
                    @if ($oldImageThree)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Current Image</p>            
                    <div class="flex items-center mr-5">             
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ Storage::url($oldImageThree) }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="col-span-3">    
                    @if ($imageThree)
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">New Image</p>
                    <div class="flex items-center mr-5">            
                        <div class="flex-shrink-0 h-20 w-20">
                        <img class="h-20 w-20 rounded-md" src="{{ $imageThree->temporaryUrl() }}" alt="" />
                        </div>
                    </div>
                    @endif
            </div>
            <div class="flex items-center mr-5">    
                <input wire:model="imageThree" type="file" id="image_three" name="image_three" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" />             
            </div>
        </div>

    </div>  

</div>