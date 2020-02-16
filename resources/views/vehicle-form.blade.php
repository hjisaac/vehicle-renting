<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>add vehicles</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="col-6 offset-3 mb-2   font-italic text-muted">

            @if ($errors->any())
            <div class="alert mt-4 alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


                @if(session()->has('success'))
                    <div class="alert mt-4 alert-success">
                        <p>{{session()->pull('success')}}</p>
                    </div>
                @endif

            <h3 class="mt-4 pt-2 pl-2 pb-2 font-weight-bold bg-light rounded">Vehicule</h3>
            <form method="POST"  action="/vehicle/post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="matriculation" class="col-form-label">Immatriculation(matriculation):</label>
                    <input name="matriculation" type="text" class="form-control " >
                </div>

                <div class="form-group">
                    <label for="numberPlace" class="col-form-label">Nombre Place(number place):</label>
                    <input list="place" name="numberPlace" type="text" class="form-control " >
                    <datalist id="place">
                        <option value="2">
                        <option value="5">
                        <option value="9">
                        <option value="15">
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="numberLuggage" class="col-form-label">Nombre Bagage(number luggage):</label>
                    <input list="bagage" name="numberLuggage" type="text" class="form-control " >
                    <datalist id="bagage">
                        <option value="2">
                        <option value="3">
                        <option value="5">
                        <option value="8">
                    </datalist>
                </div>

                <div class="form-group">
                    <label for="brand" class="col-form-label">Marque(brand):</label>
                    <input list="brands" name="brand" type="text" class="form-control " >
                    <datalist id="brands">
                        <option value="TOY0TA">
                        <option value="MERCEDEZ">
                        <option value="Citroën">
                        <option value="Nissan">
                        <option value="BMW">
                        <option value="Renault">
                    </datalist>
                </div>

                <div class="form-group">
                    <label for="model" class="col-form-label">Modele(model):</label>
                    <input list="models" name="model" type="text" class="form-control" >
                    <datalist id="models">
                        <option value="SUV">
                        <option value="Cargo">
                        <option value="Mini">
                    </datalist>
                </div>

                <div class="form-group">
                    <label for="price" class="col-form-label">Prix(price):</label>
                    <input list="price" name="price" type="text" class="form-control" >
                    <datalist id="price">
                        <option value="15000">
                        <option value="20000">
                        <option value="30000">
                        <option value="50000">
                        <option value="60000">
                    </datalist>
                </div>
            <!--
                <div class="form-group ">
                    <label for="registrationDate" class="col-form-label">Date Enregistrement :</label>
                    <input name="registrationDate" type="text" class="form-control " >
                </div>
            -->


                <div class="form-group ">
                    <label for="image" class="col-form-label">Image du Vehicule:</label>
                    <div class="custom-file form-group mb-4">
                        <label class="custom-file-label col-form-label" for="validatedCustomFile">Selectionner un fichier...</label>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" >
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right mb-2 font-italic">Enregistrer</button>

                <a  href="/admin" class="btn btn btn-secondary float-left text font-italic">Retour</a>

            </form>

        </div>
    </body>

</html>

