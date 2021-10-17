<div class="grid grid-cols-9 gap-6">
    <div class="col-span-3">
        <label for="category_id" class="block text-sm font-medium text-gray-700">
          Category
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
          <select wire:model="selectedCategory" name="category_id" id="category_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                <option value="">--selecting--</option>
            @foreach ($categories as $category)
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
      <div class="col-span-3">
        <label for="sub_category_id" class="block text-sm font-medium text-gray-700">
          Sub Category
        </label>
@if (!is_null($selectedCategory))
        <div class="mt-1 flex rounded-md shadow-sm">
          <select wire:model="selectedSubCategory" name="sub_category_id" id="sub_category_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                <option value="">--selecting--</option>
            @foreach ($subCategories as $sub_category)
                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>                      
            @endforeach
          </select>
        </div>
@endif

          @error('sub_category_id')
              <span class="text-red-500 invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

      </div>
      <div class="col-span-3">
        <label for="child_category_id" class="block text-sm font-medium text-gray-700">
          Child Category
        </label>
@if (!is_null($selectedSubCategory))
        <div class="mt-1 flex rounded-md shadow-sm">
          <select name="child_category_id" id="child_category_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                <option value="">--selecting--</option>
            @foreach ($childCategories as $child_category)
                <option value="{{ $child_category->id }}">{{ $child_category->name }}</option>
            @endforeach             
            
          </select>
        </div>
@endif
          @error('child_category_id')
              <span class="text-red-500 invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

      </div>
</div>
