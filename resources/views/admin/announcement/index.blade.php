@extends('admin.layouts.app')
@section('title')Հայտարարություններ @endsection
@section('content') 
    <table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
			</tr>
		</thead>
		<tbody>
		    <tr class="border-double">
			    <td>1</td>
			    <td>Eugene</td>
			    <td>Kopyov</td>
			    <td>@Kopyov</td>
		    </tr>
									
		</tbody>
	</table>
@endsection