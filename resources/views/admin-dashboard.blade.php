<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid font-italic mb-3 text-muted">
@if ($errors->any())
    <div class="alert mt-4 alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div >
    <h3 class="mt-4 pt-2 pl-2 pb-2 font-weight-bold bg-light rounded">admin</h3>
        <div class="col-sm-12">
            <table class="table table-image">
                <thead class="text-muted">
                <tr class="bg-light">
                    <th scope="col"></th>
                    <th scope="col">Caracteristiques</th>
                    <th scope="col"></th>
                    <th scope="col">Immatriculation</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date Enregistrement</th>
                    <th scope="col" class="text-center">Action</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($vehicles as $vehicle)
                    <tr class="text-muted">
                        <td class="w-25">
                            <img src="{{ asset("images/$vehicle[image]") }}"  class="img-fluid img-thumbnail" alt="Sheep">
                        </td>
                        <td class="font-italic  text-muted">
                            <table class="table-borderless">
                                <tr>
                                    <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">{{$vehicle['brand']}}</h2></td>
                                </tr>
                                <tr>

                                    <td class="p-0 text-muted">
                                        <small>{{$vehicle['model']}}</small>
                                        <small>{{$vehicle['numberPlace']}} person</small>
                                        <small>{{$vehicle['numberLuggage']}} bags</small>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                        <td>

                        </td>
                        <td>
                                {{$vehicle['matriculation']}}
                        </td>
                        <td>
                                {{$vehicle['price']}}
                        </td>
                        <td>
                                {{$vehicle['created_at']}}
                        </td>
                        <td class="pr-4 ">
                            <button type="button" class="btn btn-primary mb-1 ml-4 pr-5 font-italic" data-toggle="modal" data-target="#Modal{{$vehicle['id']}}" data-whatever="@mdo">Editer</button>
                            <form role="form" method="POST"  action="/vehicle/editer/{{$vehicle['id']}}" >
                            <div class="modal fade" id="Modal{{$vehicle['id']}}" tabindex="-1" role="dialog" aria-labelledby="Modal1Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="Modal1Label{{$vehicle['id']}}">Editer</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                                @csrf
                                                <div class="form-group">
                                                    <label for="matriculation" class="col-form-label">Immatriculation:</label>
                                                    <input name="matriculation" type="text" class="form-control " >
                                                </div>

                                                <div class="form-group">

                                                    <label for="numberPlace" class="col-form-label">Nombre Place:</label>
                                                    <input list="place{{$vehicle['id']}}" name="numberPlace" type="text" class="form-control " >
                                                    <datalist id="place{{$vehicle['id']}}">
                                                        <option value="2">
                                                        <option value="5">
                                                        <option value="9">
                                                        <option value="15">
                                                    </datalist>

                                                </div>
                                                <div class="form-group">
                                                    <label for="numberLuggage" class="col-form-label">Nombre Bagage:</label>
                                                    <input list="bagage{{$vehicle['id']}}" name="numberLuggage" type="text" class="form-control " >
                                                    <datalist id="bagage{{$vehicle['id']}}">
                                                        <option value="2">
                                                        <option value="3">
                                                        <option value="5">
                                                        <option value="8">
                                                    </datalist>
                                                </div>

                                                <div class="form-group">
                                                    <label for="brand" class="col-form-label">Marque:</label>
                                                    <input list="brands{{$vehicle['id']}}" name="brand" type="text" class="form-control " >
                                                    <datalist id="brands{{$vehicle['id']}}">
                                                        <option value="TOY0TA">
                                                        <option value="MERCEDEZ">
                                                        <option value="Citroën">
                                                        <option value="Nissan">
                                                        <option value="BMW">
                                                        <option value="Renault">
                                                    </datalist>
                                                </div>

                                                <div class="form-group">
                                                    <label for="modele" class="col-form-label">Modele:</label>
                                                    <input list="modeles{{$vehicle['id']}}" name="model" type="text" class="form-control" >
                                                    <datalist id="models{{$vehicle['id']}}">
                                                        <option value="SUV">
                                                        <option value="Cargo">
                                                        <option value="Mini">
                                                    </datalist>
                                                </div>

                                                <div class="form-group">
                                                    <label for="price" class="col-form-label">Prix:</label>
                                                    <input list="price{{$vehicle['id']}}" name="price" type="text" class="form-control" >
                                                    <datalist id="price{{$vehicle['id']}}">
                                                        <option value="15000">
                                                        <option value="20000">
                                                        <option value="30000">
                                                        <option value="50000">
                                                        <option value="60000">
                                                    </datalist>
                                                </div>
                                                <div class="modal-footer">
                                                    <button  type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                                    <button  type="submit"   value="Valider" class="btn btn-success">Valider</button>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </form>

                            <button type="button" class="btn btn-danger ml-4" data-toggle="modal" data-target="#exampleModal{{$vehicle['id']}}">
                                Supprimer
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$vehicle['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel{{$vehicle['id']}}">Suppression</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Voulez-vous reellement supprimer ce vehicule ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                            <a href="/vehicle/supprimer/{{$vehicle['id']}}"  class="btn btn-danger">OK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6 offset-5 ">
            <a  href="/vehicle" class=" mb-2  btn btn btn-primary float-right font-italic">Ajouter</a>
        </div>
    </div>

</div>

</body>

</html>