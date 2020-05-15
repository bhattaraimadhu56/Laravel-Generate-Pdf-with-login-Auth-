
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-12"> -->
            <div class="card">
                <div class="card-header"><div align="center">WELCOME TO MANAGEMENT PORTAL </div></div>

                <div class="card-body">
               

                    <div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-lg">Add Item</a>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

<br/>
<table class="table table-bordered table-striped">
	<tr style="text-align:center;">
		<th width="10%">Image</th>
		<th width="10%">First Name</th>
		<th width="10%">Last Name</th>
		<th width="30%">Description</th>
		<th width="40%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="rounded-circle" width="100"  /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>{{ $row->desc }}</td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.downloadPdf', $row->id) }}"  class="btn btn-success">Download</a>
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"  onClick="return confirm('Are you sure you want to delete ?');">Delete</button>
					
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