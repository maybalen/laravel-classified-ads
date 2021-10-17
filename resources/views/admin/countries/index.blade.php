<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Countries') }}
        </h2>

    @if (session()->has('message'))

    <div class="m-2 p-2 text-center">
      <div class="inline-flex items-center bg-white leading-none text-purple-600 rounded-full p-2 shadow text-teal text-sm">
        <span class="inline-flex px-2">{{ session('message') }}</span>
      </div>
    </div>

    @endif

    </x-slot>

    <div class="container mx-auto">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
    <div class="flex justify-end">
      <a href="{{ route('admin.countries.create') }}" class="py-2 px-4 m-2 bg-green-500 hover:bg-green-300 text-gray-50 rounded-md">New Country</a>
    </div>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  #ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Country Code
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Country Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    &nbsp;
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  &nbsp;
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($countries as $country)                   

              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $country->id }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $country->country_code }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ $country->name }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex text-sm text-gray-900"><a href="{{ route('admin.add_state', $country->id) }}" class="flex m-auto text-white bg-green-500 border-0 py-2 px-5 focus:outline-none hover:bg-green-600 rounded">Add State</a></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <div class="flex">
                    <a href="{{ route('admin.countries.edit', $country->id) }}" class="flex m-auto text-white bg-blue-500 border-0 py-2 px-5 focus:outline-none hover:bg-blue-600 rounded">Edit</a>

                    <form action="{{ route('admin.countries.destroy', $country->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="flex m-auto text-white bg-red-500 border-0 py-2 px-5 focus:outline-none hover:bg-red-600 rounded">Delete</button>
                    </form>
                  </div>

                </td>
              </tr>
              @empty
              <tr>
                <td>
                  <div class="m-2 p-2">No Country</div>
                </td>
              </tr>
                  
              
              @endforelse

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <div class="mt-5">
    {{ $countries->links() }}
  </div>
  
  </div>
  
  </x-admin-layout>
