<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #c1c4c9;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            

            <div class="jumbotron">

            <a href="http://127.0.0.1:8000/crud" class="btn btn-primary  btn-info">
             <div class="title m-b-md">
                    APP  IMAGES AND PDF 
                    
                </div> 
               
                </a>

                @if (Route::has('login'))
                <br/><br/>
                <!-- <div align="center"> -->
                <div class="lead">
                    @auth
                        <a href="{{ url('/crud') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg  float-left"  > Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info  btn-lg float-right">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<br><br>
                <div align="center">
                    <a href="http://127.0.0.1:8000/crud" class="btn btn-primary  btn-info rounded-circle " > <h4>Laravel CRUD app with images with social login and pdf generating </h4></a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
