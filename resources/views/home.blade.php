
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Location-Vehicules : @yield('title')</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/local.css') }}">

   </head>
   <body>

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    <form method="GET" action="/post/create">
        @csrf

        <div class="form-group">
                <div class="col-6 offset-3">
                    <h3 class="title">DEMARRER RESERVATION</h3>
                    <label for="">LIEU LOCATION </label>
                    <span>*</span>
                    <input list="browsers" name="browser" type="text" class="form-control form-control-lg" >
                    <datalist id="browsers">
                            <option value="Internet Explorer">
                            <option value="Firefox">
                            <option value="Chrome">
                            <option value="Opera">
                            <option value="Safari">
                    </datalist>
                </div>
        </div>

        <div class="form-group">
            <div class="col-6 offset-3">
                <label for="">LIEU RETOUR</label>
                <span>*</span>
                <input list="browsers" name="browser" type="text" class="form-control form-control-lg" >
                <datalist id="browsers">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                </datalist>
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="">DATE LOCATION</label>
                    <span>*</span>
                    <input id="datepickerstart" width="320" class="form-control form-control-lg"/>
                    <script>
                            $('#datepickerstart').datepicker({
                                uiLibrary: 'bootstrap4'
                            });
                    </script>
                 </div>

                <div class="form-group col-md-6">
                    <label for="">DATE RETOUR</label>
                    <span>*</span>
                    <input id="datepickerend" width="320" class="form-control form-control-lg"/>
                    <script>
                            $('#datepickerend').datepicker({
                                uiLibrary: 'bootstrap4'
                            });
                    </script>
                </div>

            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="">HEURE LOCATION</label>
                    <span>*</span>
                    <input id="timepickerstart" width="320" class="form-control form-control-lg"/>
                    <script>
                        $('#timepickerstart').timepicker({
                            uiLibrary: 'bootstrap4'
                        });
                </script>
                 </div>

                <div class="form-group col-md-6">
                    <label for="">HEURE RETOUR</label>
                    <span>*</span>
                    <input id="timepickerend" width="320" class="form-control form-control-lg"/>

                    <script>
                            $('#timepickerend').timepicker({
                                uiLibrary: 'bootstrap4'
                            });
                    </script>
                </div>

            </div>
        </div>

        <div class="form-group">
            <div class="col-6 offset-3">
                <label for="">TYPE VEHICULE</label>
                <input list="browsers" name="browser" type="text" class="form-control form-control-lg" >
                <datalist id="browsers">
                        <option value="Internet Explorer">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                </datalist>
            </div>

        </div>

        <div class="form-group">
            <div class="col-6 offset-3">
                <button type="button" class="btn btn btn-primary btn-lg float-right">Continuer</button>
            </div>
        </div>

    </form>
      @yield('content')
   </body>
</html>




