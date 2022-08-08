<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<!--Container-->
			<div class="container w-full mx-auto px-2">
				<!--Card-->
				<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
					<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
						<thead>
							<tr>
								<th data-priority="1">Code</th>
								<th data-priority="2">Description</th>
								<th data-priority="3">Adviser</th>
								<th data-priority="4">Enrolled</th>
							</tr>
						</thead>
						<tbody>
							@foreach($programs as $program)
								<td>{{ $program->code }}</td>
								<td>{{ $program->description }}</td>
								@foreach($users as $user)
									@if ($program->adviser == $user->id)                       
											<td>{{ $user->first_name.' '.$user->last_name }} </td>                 
									@endif
								@endforeach
								<td>
									<span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium  rounded-full bg-yellow-200  text-black">Pending</span>
								</td>	
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!--/Card-->
			</div>
			<!--/container-->

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