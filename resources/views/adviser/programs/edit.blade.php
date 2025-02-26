<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('My Program') }} | <span class=" text-md text-gray-500">{{__('List of Subjects')}}</span>
        </h2>
      </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Return Button -->
            <div class="block mb-8">
                <a href="{{ route('adviser.programs.index') }}" class="ml-1 inline-flex items-center px-4 py-1 border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest text-gray-800 shadow-md bg-sky-200 hover:bg-sky-400 hover:text-gray-200 disabled:opacity-25 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                    </svg>
                <span class="flex-1 ml-1 whitespace-nowrap">Back to list</span>
                </a>
            </div>
            
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">Course Code</th>
                            <th data-priority="2">Course Title</th>
                            <th data-priority="3">Category</th>
                            <th data-priority="4">Units</th>
                            <th data-priority="5">Professor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                             @if($subject->programs_id == $programs->id && $programs->adviser == Auth::user()->id)
                            <tr>
                            <td>{{ $subject->subj_code }}</td>
                            <td>{{ $subject->title }}</td>
                            @foreach($categories as $category)
                                @if($subject->cat_id == $category->id)
                                    <td>{{ $category->category }}</td>
                                @endif
                            @endforeach
                            <td>{{ $subject->units }}</td>
                            <td>{{ $subject->prof }}</td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
</x-app-layout>