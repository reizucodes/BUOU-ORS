<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Additional Fees') }} | <span class=" text-md text-gray-500">{{__('Create')}}</span>
    </h2>
  </x-slot>
  @include('alert')

  <div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="block mb-8">
        <a href="{{ route('cashier.additional.index') }}" class="ml-1 inline-flex items-center px-4 py-1 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest text-gray-800 shadow-md bg-sky-200 hover:bg-sky-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
          </svg>
          <span class="flex-1 ml-1 whitespace-nowrap">Back to list</span>
        </a>
      </div>
      <div class="flex items-center justify-center mt-5 md:mt-0 md:col-span-2 ">
        <div class="w-5/6 lg:w-1/2 shadow overflow-hidden rounded-lg">
          <form action="{{ route('cashier.additional.store') }}" method="post">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
              <div class="px-4 py-5 bg-white sm:p-6 border-0">
                <!--GRID-->
                <div class="grid grid-rows-2 gap-4">
                  <div class="mt-4">
                    <x-jet-label for="label" value="{{ __('Fee Name') }}" />
                    <x-jet-input id="label" class="block mt-1 w-full amount" type="text" name="label" required autofocus />
                  </div>
                  <div class="mt-4">
                    <x-jet-label for="cost" value="{{ __('Cost (₱)') }}" />
                    <x-jet-input id="cost" class="block mt-1 w-full amount" type="number" step="0.01" name="cost" required autofocus />
                  </div>
                </div>
                <!--END OF GRID-->
                <!--Button-->
                <div class="mt-2 flex items-center justify-end py-2 px-2 bg-gray-50 text-right rounded-md ">
                  <button class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest text-gray-800 shadow-md bg-green-200 hover:bg-green-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
                    Add
                  </button>
                  <button class="ml-1 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest htext-gray-800 shadow-md bg-red-200 hover:bg-red-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
                    <a href="{{ route('cashier.additional.index') }}">Cancel</a>
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
