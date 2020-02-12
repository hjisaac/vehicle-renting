<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid font-italic mb-3 text-muted">

<div >
    <div class="row">
        <div class="col-sm-3 bg-light">
            <!-- A vertical navbar -->
            <nav class="navbar ">

                <!-- Links -->
                <ul class="navbar-nav">


                </ul>
            </nav>
        </div>

        <div class="col-sm-9">
            <table class="table table-image">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td class="font-italic  text-muted ">
                        <table class="table-borderless">
                            <tr>
                                <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">Bugadi 720</h2 class="mb-0"></td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <small>Automatic</small>
                                    <small>2 person</small>
                                    <small>2 bags</small>
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

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="pr-4">

                        <button type="button" class="btn btn-primary  font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editer</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <label for="nombre-place" class="col-form-label">Nombre Place:</label>
                                                <input list="place" name="nombre-place" type="text" class="form-control " >
                                                <datalist id="place">
                                                    <option value="2">
                                                    <option value="5">
                                                    <option value="9">
                                                    <option value="15">
                                                </datalist>

                                            </div>
                                            <div class="form-group">
                                                <label for="nombre-bagage" class="col-form-label">Nombre Bagage:</label>
                                                <input list="bagage" name="nombre-bagage" type="text" class="form-control " >
                                                <datalist id="bagage">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="5">
                                                    <option value="8">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="marque" class="col-form-label">Marque:</label>
                                                <input list="marques" name="marque" type="text" class="form-control " >
                                                <datalist id="marques">
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
                                                <input list="modeles" name="marque" type="text" class="form-control" >
                                                <datalist id="modeles">
                                                    <option value="SUV">
                                                    <option value="Cargo">
                                                    <option value="Mini">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="prix" class="col-form-label">Prix:</label>
                                                <input list="prix" name="prix" type="text" class="form-control" >
                                                <datalist id="prix">
                                                    <option value="15000">
                                                    <option value="20000">
                                                    <option value="30000">
                                                    <option value="50000">
                                                    <option value="60000">
                                                </datalist>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td class="font-italic  text-muted">
                        <table class="table-borderless">
                            <tr>
                                <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">Bugadi 720</h2 class="mb-0"></td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <small>Automatic</small>
                                    <small>2 person</small>
                                    <small>2 bags</small>
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

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="pr-4">
                        <button type="button" class="btn btn-primary  font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editer</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <label for="nombre-place" class="col-form-label">Nombre Place:</label>
                                                <input list="place" name="nombre-place" type="text" class="form-control " >
                                                <datalist id="place">
                                                    <option value="2">
                                                    <option value="5">
                                                    <option value="9">
                                                    <option value="15">
                                                </datalist>

                                            </div>
                                            <div class="form-group">
                                                <label for="nombre-bagage" class="col-form-label">Nombre Bagage:</label>
                                                <input list="bagage" name="nombre-bagage" type="text" class="form-control " >
                                                <datalist id="bagage">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="5">
                                                    <option value="8">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="marque" class="col-form-label">Marque:</label>
                                                <input list="marques" name="marque" type="text" class="form-control " >
                                                <datalist id="marques">
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
                                                <input list="modeles" name="marque" type="text" class="form-control" >
                                                <datalist id="modeles">
                                                    <option value="SUV">
                                                    <option value="Cargo">
                                                    <option value="Mini">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="prix" class="col-form-label">Prix:</label>
                                                <input list="prix" name="prix" type="text" class="form-control" >
                                                <datalist id="prix">
                                                    <option value="15000">
                                                    <option value="20000">
                                                    <option value="30000">
                                                    <option value="50000">
                                                    <option value="60000">
                                                </datalist>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td class="font-italic  text-muted">
                        <table class="table-borderless">
                            <tr>
                                <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">Bugadi 720</h2 class="mb-0"></td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <small>Automatic</small>
                                    <small>2 person</small>
                                    <small>2 bags</small>
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

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="pr-4">
                        <button type="button" class="btn btn-primary  font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editer</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <label for="nombre-place" class="col-form-label">Nombre Place:</label>
                                                <input list="place" name="nombre-place" type="text" class="form-control " >
                                                <datalist id="place">
                                                    <option value="2">
                                                    <option value="5">
                                                    <option value="9">
                                                    <option value="15">
                                                </datalist>

                                            </div>
                                            <div class="form-group">
                                                <label for="nombre-bagage" class="col-form-label">Nombre Bagage:</label>
                                                <input list="bagage" name="nombre-bagage" type="text" class="form-control " >
                                                <datalist id="bagage">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="5">
                                                    <option value="8">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="marque" class="col-form-label">Marque:</label>
                                                <input list="marques" name="marque" type="text" class="form-control " >
                                                <datalist id="marques">
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
                                                <input list="modeles" name="marque" type="text" class="form-control" >
                                                <datalist id="modeles">
                                                    <option value="SUV">
                                                    <option value="Cargo">
                                                    <option value="Mini">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="prix" class="col-form-label">Prix:</label>
                                                <input list="prix" name="prix" type="text" class="form-control" >
                                                <datalist id="prix">
                                                    <option value="15000">
                                                    <option value="20000">
                                                    <option value="30000">
                                                    <option value="50000">
                                                    <option value="60000">
                                                </datalist>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td class="font-italic  text-muted">
                        <table class="table-borderless">
                            <tr>
                                <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">Bugadi 720</h2 class="mb-0"></td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <small>Automatic</small>
                                    <small>2 person</small>
                                    <small>2 bags</small>
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

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="pr-4">
                        <button type="button" class="btn btn-primary  font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editer</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <label for="nombre-place" class="col-form-label">Nombre Place:</label>
                                                <input list="place" name="nombre-place" type="text" class="form-control " >
                                                <datalist id="place">
                                                    <option value="2">
                                                    <option value="5">
                                                    <option value="9">
                                                    <option value="15">
                                                </datalist>

                                            </div>
                                            <div class="form-group">
                                                <label for="nombre-bagage" class="col-form-label">Nombre Bagage:</label>
                                                <input list="bagage" name="nombre-bagage" type="text" class="form-control " >
                                                <datalist id="bagage">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="5">
                                                    <option value="8">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="marque" class="col-form-label">Marque:</label>
                                                <input list="marques" name="marque" type="text" class="form-control " >
                                                <datalist id="marques">
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
                                                <input list="modeles" name="marque" type="text" class="form-control" >
                                                <datalist id="modeles">
                                                    <option value="SUV">
                                                    <option value="Cargo">
                                                    <option value="Mini">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="prix" class="col-form-label">Prix:</label>
                                                <input list="prix" name="prix" type="text" class="form-control" >
                                                <datalist id="prix">
                                                    <option value="15000">
                                                    <option value="20000">
                                                    <option value="30000">
                                                    <option value="50000">
                                                    <option value="60000">
                                                </datalist>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td class="font-italic  text-muted">
                        <table class="table-borderless">
                            <tr>
                                <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">Bugadi 720</h2 class="mb-0"></td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <small>Automatic</small>
                                    <small>2 person</small>
                                    <small>2 bags</small>
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

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="pr-4">
                        <button type="button" class="btn btn-primary  font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editer</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <label for="nombre-place" class="col-form-label">Nombre Place:</label>
                                                <input list="place" name="nombre-place" type="text" class="form-control " >
                                                <datalist id="place">
                                                    <option value="2">
                                                    <option value="5">
                                                    <option value="9">
                                                    <option value="15">
                                                </datalist>

                                            </div>
                                            <div class="form-group">
                                                <label for="nombre-bagage" class="col-form-label">Nombre Bagage:</label>
                                                <input list="bagage" name="nombre-bagage" type="text" class="form-control " >
                                                <datalist id="bagage">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="5">
                                                    <option value="8">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="marque" class="col-form-label">Marque:</label>
                                                <input list="marques" name="marque" type="text" class="form-control " >
                                                <datalist id="marques">
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
                                                <input list="modeles" name="marque" type="text" class="form-control" >
                                                <datalist id="modeles">
                                                    <option value="SUV">
                                                    <option value="Cargo">
                                                    <option value="Mini">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="prix" class="col-form-label">Prix:</label>
                                                <input list="prix" name="prix" type="text" class="form-control" >
                                                <datalist id="prix">
                                                    <option value="15000">
                                                    <option value="20000">
                                                    <option value="30000">
                                                    <option value="50000">
                                                    <option value="60000">
                                                </datalist>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>


                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep">
                    </td>
                    <td class="font-italic  text-muted">
                        <table class="table-borderless">
                            <tr>
                                <td class="p-0 display-6"><h2 class="mb-0 font-weight-bold">Bugadi 720</h2 class="mb-0"></td>
                            </tr>
                            <tr>

                                <td class="p-0">
                                    <small>Automatic</small>
                                    <small>2 person</small>
                                    <small>2 bags</small>
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

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="pr-4">
                        <button type="button" class="btn btn-primary  font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editer</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">

                                                <label for="nombre-place" class="col-form-label">Nombre Place:</label>
                                                <input list="place" name="nombre-place" type="text" class="form-control " >
                                                <datalist id="place">
                                                    <option value="2">
                                                    <option value="5">
                                                    <option value="9">
                                                    <option value="15">
                                                </datalist>

                                            </div>
                                            <div class="form-group">
                                                <label for="nombre-bagage" class="col-form-label">Nombre Bagage:</label>
                                                <input list="bagage" name="nombre-bagage" type="text" class="form-control " >
                                                <datalist id="bagage">
                                                    <option value="2">
                                                    <option value="3">
                                                    <option value="5">
                                                    <option value="8">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="marque" class="col-form-label">Marque:</label>
                                                <input list="marques" name="marque" type="text" class="form-control " >
                                                <datalist id="marques">
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
                                                <input list="modeles" name="marque" type="text" class="form-control" >
                                                <datalist id="modeles">
                                                    <option value="SUV">
                                                    <option value="Cargo">
                                                    <option value="Mini">
                                                </datalist>
                                            </div>

                                            <div class="form-group">
                                                <label for="prix" class="col-form-label">Prix:</label>
                                                <input list="prix" name="prix" type="text" class="form-control" >
                                                <datalist id="prix">
                                                    <option value="15000">
                                                    <option value="20000">
                                                    <option value="30000">
                                                    <option value="50000">
                                                    <option value="60000">
                                                </datalist>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="col-6 offset-5">
            <button type="button" class="btn btn btn-primary float-right  font-italic">Ajouter</button>
        </div>
    </div>

</div>

</body>

</html>