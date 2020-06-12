@extends('layouts.app')
  
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravel Login Section with Google Account</div>
  
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
  
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
  
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
   
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
  
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
  
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                  
                                <a href="{{ url('auth/google') }}" style="margin-top: 10px;" class="btn btn-sm btn-secondary btn-block">
                                  <strong>Login With Google</strong>
                                </a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->           

 <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="1.jpg" class="d-block w-100" alt="..."> -->
                <img src="{{ URL::to('/') }}/images/login/3.jpg"class="d-block w-100" style="height:90vh"   />
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Laravel Curd Application with Social Login Multi-image upload and generate pdf </h2>
                    <button class="btn btn-danger">Latest Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                  
                </div>
            </div>
            <div class="carousel-item">
                <!-- <img src="2.jpg" class="d-block w-100" alt="..."> -->
                <img src="{{ URL::to('/') }}/images/login/2.jpg"class="d-block w-100 " style="height:90vh"  />
                <div class="carousel-caption d-none d-md-block">
                    <h2>Learning new technology day by day </h2>
                   
                    <button class="btn btn-danger"> Laravel become best among all</button>
                    <button class="btn btn-primary">Generate pdf</button>
                   
                </div>
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



               



@endsection