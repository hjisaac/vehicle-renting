<!DOCTYPE html>
<html>
<head>
    <title>Gadgets</title>
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

                        <p style="text-align:center;">
                        <h2>
                            <b>
                                <i>Details Location</i>
                            </b>
                        </h2>
                        </p>

                        <form action="/action_page.php">
                            <table class="table table-borderless text-muted">
                                <tbody>
                                <tr>
                                    <td>Date Retrait</td>
                                    <td>10/20/2019</td>
                                </tr>

                                <tr>
                                    <td>Date Retour</td>
                                    <td>20/10/2019</td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="divider"><hr /></td>
                                </tr>

                                <tr>
                                    <td >Lieu Retrait</td>
                                    <td>Paris pau</td>
                                </tr>

                                <tr>
                                    <td >Lieu Retours</td>
                                    <td>Paris sorbone</td>
                                </tr>

                                </tbody>
                            </table>



                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Filtrer</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-9">
                <div class="border-bottom">
                    <table class=" table table-borderless ">
                        <tr>
                            <td class="pr-2 border-right">
                                <img src="{{ asset('images/car2.jfif') }}" class="img-fluid img-thumbnail" alt="Sheep" />
                            </td>
                            <td class="pl-2 ">
                                <table class="table-borderless">
                                    <tr>
                                        <td class="text-left">Nom : </td>
                                        <td class="text-right">Suv 520 </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">Nombre-place : </td>
                                        <td class="text-right"> 4 </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">Par-jour : </td>
                                        <td class="text-right"> 70 </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">Total : </td>
                                        <td class="text-right"> 365 </td>
                                    </tr>

                                </table>

                            </td>
                        </tr>
                    </table>
                </div>

                <div>

                    <h2 class="mx-auto font-weight-bold">Ajouter Extra</h2>

                    <table class=" table table-borderless">

                        <tr class="pb-4">

                            <td><h5>Assurance</h5> </td>
                            <td>

                                <table class="ml-5">
                                    <tr>
                                        <td class="text-left pr-4" >Assurance Accident</td>
                                        <td class="text-left pr-4"> 1700 / jour </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn btn-primary">Ajouter</button>
                                        </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn  btn-danger">Enlever</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left pr-4" >Assurance Accident</td>
                                        <td class="text-left pr-4"> 1700 / jour </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn btn-primary">Ajouter</button>
                                        </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn  btn-danger">Enlever</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left pr-4" >Assurance Accident</td>
                                        <td class="text-left pr-4"> 1700 / jour </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn btn-primary">Ajouter</button>
                                        </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn  btn-danger">Enlever</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>

                        <tr>

                            <td><h5>Equipements</h5> </td>
                            <td>

                                <table class="ml-5">
                                    <tr>
                                        <td class="text-left pr-4" >Assurance Accident</td>
                                        <td class="text-left pr-4"> 1700 / jour </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn btn-primary">Ajouter</button>
                                        </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn  btn-danger">Enlever</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left pr-4" >Assurance Accident</td>
                                        <td class="text-left pr-4"> 1700 / jour </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn btn-primary">Ajouter</button>
                                        </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn  btn-danger">Enlever</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left pr-4" >Assurance Accident</td>
                                        <td class="text-left pr-4"> 1700 / jour </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn btn-primary">Ajouter</button>
                                        </td>
                                        <td class="text-left pr-4">
                                            <button type="Button" class="btn  btn-danger">Enlever</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-6 offset-4">
                <button type="button" class="btn btn btn-primary  float-right font-italic">Continuer</button>
            </div>
        </div>
    </div>
</body>
</html>
