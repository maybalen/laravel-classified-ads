<div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
    <form>
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui"
                              d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                    </svg>
                    <input type="text" name="title" id="title" placeholder="Enter titile here..."
                           class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                </div>
                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                    <svg  class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui"
                              d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/>
                    </svg>
                    <select id="category" name="category" class="bg-gray-300 w-full focus:outline-none text-gray-700">
                      <option value="0">-- All --</option>                      
                      @foreach (App\Models\Category::all() as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>                      
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                    <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="heroicon-ui"
                              d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"/>
                    </svg>
                    <select id="country" name="country"  class="bg-gray-300 w-full focus:outline-none text-gray-700">
                        <option value="0">-- All --</option>                      
                        @foreach (App\Models\Country::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>                      
                        @endforeach
                      </select>
                </div>
                <div class="flex border rounded bg-gray-300 items-center p-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    <input type="text" name="maxPrice" id="maxPrice" placeholder="Enter price here..."
                           class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-2"><button type="button" id="filter" class="p-2 border w-1/4 rounded-md bg-gray-800 text-white">Filter</button></div>
    </form>
    </div>