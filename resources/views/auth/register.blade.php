<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

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
        <h3 class="mt-4 pt-2 pl-2 pb-2 mb-4 font-weight-bold bg-light rounded">Register</h3>
        <form method="POST" action="{{ action('Auth\UserRegistrationController@checkRegisterForm') }}">
            {{csrf_field()}}

            <div class="form-group">
                <label for="inputAddress">Firstname</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="firstname">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Lastname</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="lastname">
            </div>
            <div class="form-group ">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group ">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>
            <div class="form-group ">
                <label for="inputPassword4">Confirm Password</label>
                <input type="password" class="form-control" id="inputConfirmPassword4" placeholder="Password" name="confirmpassword">
            </div>


            <div class="form-group ">
                <label for="inputCity">Pseudo</label>
                <input type="text" class="form-control" id="inputCity" name="pseudo">
            </div>
            <div class="form-group ">
                <label for="inputState">Telephone</label>
                <input type="text" class="form-control" id="inputCity" name="telephone">
            </div>


            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-primary float-right mb-2 font-italic">Register</button>
            </div>
        </form>
    </div>
    </body>
</html>

