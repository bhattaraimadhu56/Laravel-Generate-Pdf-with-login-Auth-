<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">WELCOME O MANAGEMENT PORTAL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div align="right">
	<a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">Add</a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="20%">Image</th>
		<th width="20%">First Name</th>
		<th width="20%">Last Name</th>
		<th width="40%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-circle" width="45" /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
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
            </div>
        </div>
    </div>
</div>
@endsection