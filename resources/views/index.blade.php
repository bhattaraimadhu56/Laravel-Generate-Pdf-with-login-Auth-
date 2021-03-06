
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-12"> -->
            <div class="card">
                <div class="card-header"><div align="center">WELCOME TO MANAGEMENT PORTAL </div></div>

                <div class="card-body">
               

                    <div align="right">
					<a href="{{ route('crud.create') }}" class="btn btn-primary btn-lg float-left">Add Item</a>
					
					<!-- ->name('crud.allToPdf') must be same in web.php -->
					<a href="{{ route('crud.allToPdf') }}" class="btn btn-success btn-lg float-right">Export to PDF</a>
					<br> <br>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

<br/>
<table class="table table-bordered table-striped table-hover">
	<tr style="text-align:center;">
		<th width="10%">Image</th>
		<th width="10%">First Name</th>
		<th width="10%">Last Name</th>
		<th width="20%">Adress</th>
		<th width="20%">Description</th>
		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr> 
						<!-- // for only one image works -->
						<!-- <td><img src="{{ URL::to('/') }}/images/{{ ($row->image) }}" class="rounded-circle" width="100"  /></td> -->



						<!-- // For multiple images to get first works -->
						<td><img src="{{ URL::to('/') }}/images/{{ explode("|", $row->image)[0]  }}" class="rounded-circle" width="100"  /></td>
			

						<!-- // For multiple images to get All images works -->
						<!-- https://stackoverflow.com/questions/59722228/laravel-multiple-images-explode-implode -->
						<!-- @foreach (explode('|', $row->image) as $img)
						<td><img src="{{ URL::to('/') }}/images/{{ $img }}" class="rounded-circle" width="100"  /></td>
						@endforeach -->

			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td> {{$row->address}} </td>
			<td>{{ $row->desc }} </td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.downloadPdf', $row->id) }}"  class="btn btn-success btn-sm">Download</a>
					<!-- <a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary btn-sm">Show</a> -->
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger btn-sm"  onClick="return confirm('Are you sure you want to delete ?');">Delete</button>
					

				</form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
                </div>  
				<!-- end of card body -->
            </div>
			<!-- End of Card -->
        </div>
		<!-- End of container  -->
  
@endsection