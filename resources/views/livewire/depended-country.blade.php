<div class="grid grid-cols-9 gap-6">
    <div class="col-span-3">
      <label for="country_id" class="block text-sm font-medium text-gray-700">
        Country
      </label>
      <div class="mt-1 flex rounded-md shadow-sm">
        <select wire:model="selectedCountry" name="country_id" id="country_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
            <option value="">--selecting--</option>
            @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{ $country->name }}</option>                      
          @endforeach
        </select>
      </div>
        @error('country_id')
            <span class="text-red-500 invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-span-3">
      <label for="state_id" class="block text-sm font-medium text-gray-700">
        State
      </label>
@if (!is_null($selectedCountry))
      <div class="mt-1 flex rounded-md shadow-sm">
        <select wire:model="selectedState" name="state_id" id="state_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
            <option value="">--selecting--</option>
            @foreach ($states as $state)
            <option value="{{ $state->id }}">{{ $state->name }}</option>                      
          @endforeach
        </select>
      </div>
@endif
        @error('state_id')
            <span class="text-red-500 invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-span-3">
      <label for="city_id" class="block text-sm font-medium text-gray-700">
        City
      </label>
@if (!is_null($selectedState))
      <div class="mt-1 flex rounded-md shadow-sm">
        <select wire:model="selectedCity" name="city_id" id="city_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
            <option value="">--selecting--</option>
          @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>                      
          @endforeach
        </select>
      </div>
@endif
        @error('city_id')
            <span class="text-red-500 invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
  </div>