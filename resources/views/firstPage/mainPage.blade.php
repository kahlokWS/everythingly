<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
            <div class="top-right links">
                <a href="{{ url('registerNew') }}">Create Account</a>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    EverythingLY
                </div>
                    <form method="POST" action="{{ url('loginEv') }}">
                        @csrf
                        <div class="row">
                            <div class="col-mg-12">
                                <input type="text" name="username" value="{{ old('username') }}" class="form-control text-center text-dark" placeholder="username">
                            </div>
                            <div class="col-mg-12" style="margin-top: 10px;">
                                <input type="password" name="password" class="form-control text-center" placeholder="password">
                            </div>
                            <div class="col-mg-12" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-success">Log In</button>
                            </div>
                        </div>
                    </form>
                    @if(count($errors) > 0)
                    <div class="row">
                        <div class="col-mg12 alert alert-danger">
                        @foreach($errors->all() AS $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </div>
                    </div>
                    @endif
                    @if($message = Session::get('error'))
                    <div class="row">
                        <div class="col-mg12 alert alert-danger">
                            <strong>{{$message}}</strong>
                        </div>
                    </div>
                    @endif
            </div>
        </div>
    </body>
</html>
