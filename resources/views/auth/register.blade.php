<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"/>
        <script src="{{ asset('js/bootstrap.js')}}" type="text/javascript"> 

        </script>
        <!-- <form action="login/post" method="POST"> -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form method="POST" action="{{ action('Auth\UserRegistrationController@store') }}">
        {{csrf_field()}}
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
            </div>
            </div>
            <div class="form-group">
            <label for="inputAddress">Firstname</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="firstname">
            </div>
            <div class="form-group">
            <label for="inputAddress2">Lastname</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="lastname">
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Pseudo</label>
                <input type="text" class="form-control" id="inputCity" name="pseudo">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Telephone</label>
                <input type="text" class="form-control" id="inputCity" name="tel">
            </div>
            
            </div>
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                Check me out
                </label>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>