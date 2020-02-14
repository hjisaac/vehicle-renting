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
                    
                            <p style="text-center;">
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
                                
                                <button type="button" class="btn btn-primary float-right font-italic" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Filtrer</button>
                                
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Filtrer</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>   
                                                    <div class="form-group">
                                                    
                                                        <label for="recipient-name" class="col-form-label">Vehicule:</label>
                                                        <input list="browsers" name="browser" type="text" class="form-control " >
                                                        <datalist id="browsers">
                                                                <option value="Internet Explorer">
                                                                <option value="Firefox">
                                                                <option value="Chrome">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                        </datalist>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Nombre Place:</label>
                                                            <input list="browsers" name="browser" type="text" class="form-control " >
                                                            <datalist id="browsers">
                                                                    <option value="Internet Explorer">
                                                                    <option value="Firefox">
                                                                    <option value="Chrome">
                                                                    <option value="Opera">
                                                                    <option value="Safari">
                                                            </datalist>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                <button type="button" class="btn btn-primary">Accepter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form> 
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
                                <img src="Car1.jfif" class="img-fluid img-thumbnail" alt="Sheep">
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
                            <td>
                                <h5 for="" class="mb-0 text-muted font-weight-bold ">payer apres</h5>
                                <table class="table-borderless border-top text-muted center">
                                    <tr>
                                        <td class="border-right text-center"><h5 class="mb-0">17</h5><small>par jour</small></td>
                                        <td class="border-left text-center"><h5 class="mb-0">135</h5><small>Total</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25">
                                <img src="Car1.jfif" class="img-fluid img-thumbnail" alt="Sheep">
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
                            <td>
                                <h5 for="" class="mb-0 text-muted font-weight-bold ">payer apres</h5>
                                <table class="table-borderless border-top text-muted center">
                                    <tr>
                                        <td class="border-right text-center"><h5 class="mb-0">17</h5><small>par jour</small></td>
                                        <td class="border-left text-center"><h5 class="mb-0">135</h5><small>Total</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25">
                                <img src="Car1.jfif" class="img-fluid img-thumbnail" alt="Sheep">
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
                            <td>
                                <h5 for="" class="mb-0 text-muted font-weight-bold ">payer apres</h5>
                                <table class="table-borderless border-top text-muted center">
                                    <tr>
                                        <td class="border-right text-center"><h5 class="mb-0">17</h5><small>par jour</small></td>
                                        <td class="border-left text-center"><h5 class="mb-0">135</h5><small>Total</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="w-25">
                                <img src="Car1.jfif" class="img-fluid img-thumbnail" alt="Sheep">
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
                            <td>
                                <h5 for="" class="mb-0 text-muted font-weight-bold ">payer apres</h5>
                                <table class="table-borderless border-top text-muted center">
                                    <tr>
                                        <td class="border-right text-center"><h5 class="mb-0">17</h5><small>par jour</small></td>
                                        <td class="border-left text-center"><h5 class="mb-0">135</h5><small>Total</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25">
                                <img src="Car1.jfif" class="img-fluid img-thumbnail" alt="Sheep">
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
                            <td>
                                <h5 for="" class="mb-0 text-muted font-weight-bold ">payer apres</h5>
                                <table class="table-borderless border-top text-muted center">
                                    <tr>
                                        <td class="border-right text-center"><h5 class="mb-0">17</h5><small>par jour</small></td>
                                        <td class="border-left text-center"><h5 class="mb-0">135</h5><small>Total</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td class="w-25">
                                <img src="Car1.jfif" class="img-fluid img-thumbnail" alt="Sheep">
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
                            <td>
                                <h5 for="" class="mb-0 text-muted font-weight-bold ">payer apres</h5>
                                <table class="table-borderless border-top text-muted center">
                                    <tr>
                                        <td class="border-right text-center"><h5 class="mb-0">17</h5><small>par jour</small></td>
                                        <td class="border-left text-center"><h5 class="mb-0">135</h5><small>Total</small></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                    </tbody>
                    </table>   
                </div>
                <div class="col-6 offset-5">
                    <button type="button" class="btn btn btn-primary btn-lg float-right font-italic">Continuer</button>
                </div>
            </div>
            
        </div>

    </body>

</html>