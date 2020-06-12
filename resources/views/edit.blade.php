@extends('parent')

@section('main')
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
</div>
<br />

<form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data" >

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
		<label class="col-md-4 text-right">Enter Address</label>
		<div class="col-md-8">
			<input type="text" name="address" value="{{ $data->address }}" id ="address" class="form-control input-lg" placeholder="Enter your Address" />
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
			<input type="file" name="image[]"  multiple/>
			<!-- while uploading single images -->
			<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="200" /> -->
			<!-- while uploading multiple images -->
			<img src="{{ URL::to('/') }}/images/{{ explode("|", $data->image)[0]  }}" class="rounded-circle" width="150"  />
			<input type="hidden" name="hidden_image" value="{{ $data->image }}" />
		</div>
	</div>


	<div class="form-group text-center pull-right">
		<input type="submit" name="edit" class="btn btn-primary " value="Update Details" />
	</div>
</form>

<!-- javascript code  -->
<!-- <script src="https://maps.google.com/maps/api/js?key=Your_Google_Key; libraries=places&callback=initAutocomplete" type="text/javascript"></script> -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete" type="text/javascript"></script>
<script>
   google.maps.event.addDomListener(window, 'load', initialize);

   function initialize() {
       var input = document.getElementById('address');
       var autocomplete = new google.maps.places.Autocomplete(input);
       autocomplete.addListener('place_changed', function() {
       var place = autocomplete.getPlace(); 
	   // to get latitude and longitude  $('#latitude') means in which id we want to show
        //    $('#latitude').val(place.geometry['location'].lat());
        //    $('#longitude').val(place.geometry['location'].lng());
               });
   }
</script>
@endsection



