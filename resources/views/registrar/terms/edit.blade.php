<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Terms') }} | <span class=" text-md text-gray-500">{{__('Edit')}}</span>
    </h2>
  </x-slot>

  <div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="block mb-8">
        <a href="{{ route('registrar.terms.index') }}" class="ml-1 inline-flex items-center px-4 py-1 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest text-gray-800 shadow-md bg-cyan-200 hover:bg-cyan-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
          </svg>
          <span class="flex-1 ml-1 whitespace-nowrap">Back to list</span>
        </a>
      </div>
      <div class="flex items-center justify-center mt-5 md:mt-0 md:col-span-2">
        <div class="w-5/6 lg:w-1/2 shadow overflow-hidden rounded-lg">
          <form action="{{ route('registrar.terms.update', $term->id) }}" method="post">
            @csrf
            @method("PATCH")
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6 border-0">
                <!--GRID-->
                <div class="grid grid-rows-2 gap-4">
                  <div class="mt-4">
                    <x-jet-label for="year" value="Year" />
                    <select id="role" name="year" class="block mt-1 w-full text-gray-500 bg-white border-solid border-gray-300 rounded-md">
                      <option selected value="{{$term->year}}">{{$term->year}}</option>
                      <option value="2021-2022">2021-2022</option>
                      <option value="2022-2023">2022-2023</option>
                      <option value="2023-2024">2023-2024</option>
                      <option value="2024-2025">2024-2025</option>
                    </select>
                  </div>
                  <div class="mt-4">
                    <x-jet-label for="label" value="Semester" />
                    <select id="role" name="label" class="block mt-1 w-full text-gray-500 bg-white border-solid border-gray-300 rounded-md">
                      <option selected value="{{$term->label}}">{{$term->label}}</option>
                      <option value="First Semester">First Semester</option>
                      <option value="Second Semester">Second Semester</option>
                      <option value="Midyear Semester">Midyear Semester</option>
                    </select>
                  </div>
                  <input type="hidden" name="status" value="{{$term->status}}">
                </div>
                <!--END OF GRID-->
                <!--Button-->
                <div class="mt-4 rounded-lg flex items-center justify-end py-1 bg-gray-50 text-right sm:px-6 overflow-hidden">
                  <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest text-gray-800 shadow-md bg-green-200 hover:bg-green-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
                    Save
                  </button>
                  <button class="ml-1 inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest text-gray-800 shadow-md bg-red-200 hover:bg-red-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
                    <a href="{{ route('registrar.terms.index') }}">Cancel</a>
                  </button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</x-app-layout>
