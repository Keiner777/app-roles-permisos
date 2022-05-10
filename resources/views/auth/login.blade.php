



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100% font-family: Verdana;
        }

        body {

            background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1600 900'%3E%3Cdefs%3E%3ClinearGradient id='a' x1='0' x2='0' y1='1' y2='0' gradientTransform='rotate(0,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23FF630A'/%3E%3Cstop offset='1' stop-color='%23FF880E'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' x1='0' x2='0' y1='0' y2='1' gradientTransform='rotate(0,0.5,0.5)'%3E%3Cstop offset='0' stop-color='%23F00'/%3E%3Cstop offset='1' stop-color='%23FC0'/%3E%3C/linearGradient%3E%3C/defs%3E%3Cg fill='%23FFF' fill-opacity='0' stroke-miterlimit='10'%3E%3Cg stroke='url(%23a)' stroke-width='9.569999999999999'%3E%3Cpath transform='translate(-26.25 3.2) rotate(1.25 1409 581) scale(0.9978049999999999)' d='M1409 581 1450.35 511 1490 581z'/%3E%3Ccircle stroke-width='3.19' transform='translate(-25.5 18) rotate(2.9 800 450) scale(1.004986)' cx='500' cy='100' r='40'/%3E%3Cpath transform='translate(8.2 -31.5) rotate(26.5 401 736) scale(1.004986)' d='M400.86 735.5h-83.73c0-23.12 18.74-41.87 41.87-41.87S400.86 712.38 400.86 735.5z'/%3E%3C/g%3E%3Cg stroke='url(%23b)' stroke-width='2.9'%3E%3Cpath transform='translate(108 -2.2) rotate(0.55 150 345) scale(0.9919349999999999)' d='M149.8 345.2 118.4 389.8 149.8 434.4 181.2 389.8z'/%3E%3Crect stroke-width='6.38' transform='translate(-44.5 -47.5) rotate(28.799999999999997 1089 759)' x='1039' y='709' width='100' height='100'/%3E%3Cpath transform='translate(-80 24) rotate(4.8 1400 132) scale(0.975)' d='M1426.8 132.4 1405.7 168.8 1363.7 168.8 1342.7 132.4 1363.7 96 1405.7 96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="antialiased">

    @extends('layouts.auth_app')
    @section('title')
        Admin Login
    @endsection
    @section('content')
        <div class="card card-primary">
            <div class="card-header"><h4>Admin Login</h4></div>
    
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger p-0">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input aria-describedby="emailHelpBlock" id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               placeholder="Enter Email" tabindex="1"
                               value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus
                               required>
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                            <div class="float-right">
                                <a href="{{ route('password.request') }}" class="text-small">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                        <input aria-describedby="passwordHelpBlock" id="password" type="password"
                               value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}"
                               placeholder="Enter Password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password"
                               tabindex="2" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                   id="remember"{{ (Cookie::get('remember') !== null) ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">Remember Me</label>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
  

</body>




</html>
