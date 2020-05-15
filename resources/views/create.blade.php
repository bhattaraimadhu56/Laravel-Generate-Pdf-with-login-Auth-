@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg" placeholder="Enter First Name" />
			<br>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" class="form-control input-lg" placeholder="Enter Last Name" />
			<br>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-4 text-right">Short Description</label>
		<div class="col-md-8">
			<!-- <input type="text" name="desc"  placeholder="Description" class="form-control input-lg" /> -->
			<textarea
                    class="form-control input-lg"
                    style="height:100px"
                    name="desc"
                    placeholder="Provide Short Description" >
					</textarea>
				<br>
	
		</div>
	</div>
	
	
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center pull-right">
		<input type="submit" name="add" class="btn btn-primary " value="Save Details" />
	</div>

</form>

@endsection



