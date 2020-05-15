@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">

	@csrf
	@method('PATCH')
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
			<br />
		</div>
	</div>

	
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
			<br />
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
                   >
				   
				 {{ $data->desc }}
				</textarea>
				<!-- <textarea rows="" cols="">Default value pass here</textarea> -->
				<br>
	
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<input type="file" name="image" />
			<img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="200" />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>


	<div class="form-group text-center pull-right">
		<input type="submit" name="edit" class="btn btn-primary " value="Update Details" />
	</div>
</form>
@endsection



