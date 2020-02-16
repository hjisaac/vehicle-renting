<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"/>
        <script src="{{ asset('js/bootstrap.js')}}" type="text/javascript"> 

        </script>
    </head>
    <body>

    <div class="col-6 offset-3 text-muted font-italic">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h3 class="mt-4 pt-2 pl-2 pb-2 mb-4 font-weight-bold bg-light rounded">Login</h3>
        <form method="POST" action="{{ action('Auth\UserLoginController@showLoginForm') }}">
            {{csrf_field()}}

                <div class="form-group ">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group ">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                </div>

            <button type="submit" class="btn btn-primary float-right font-italic">Login</button>
        </form>
    </div>
    </body>
