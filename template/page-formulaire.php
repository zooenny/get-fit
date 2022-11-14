<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e95fdf927c.js" crossorigin="anonymous"></script>
    <title>Page formulaire</title>
</head>

<body>

<?php 
 require 'header.php'
?>

<div class="container pt-3">
        <div class="row"> 
                <a class="ml-15 btn btn-secondary" href="/get-fit/template/client-listing.php"
                    role="button">
                    Retour liste partenaires
                </a>
        </div>
    </div>


    <div class="container pt-5">
        <div class="row">   
            <div class="col-md-12 col-xs-6">
                <div class="col-md-6 col-xs-4">
                    <h1>Ajouter un partenaire</h1>
                    <form>
                        <div class="form-group pt-2">
                          <label for="FormControlClientId">client_id</label>
                          <input type="text" class="form-control" id="FormControlClientId">
                        </div>
                        <div class="form-group">
                            <label for="FormControlInstallId">install_id</label>
                            <input type="text" class="form-control" id="FormControlInstallId">
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="clientIsActive" id="clientIsActive" value="true">
                            <label class="form-check-label" for="clientIsActive">
                                Client actif
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="clientIsNotActive" id="clientIsNotActive" value="false">
                            <label class="form-check-label" for="clientIsNotActive">
                                Client non actif 
                            </label>
                          </div>
                          <div class="form-group pt-2">
                            <label for="FormControlBranchId">branch_id</label>
                            <input type="text" class="form-control" id="FormControlBranchId">
                          </div>
                      </form>
                </div>
                <div class="col-md-6 col-xs-4">
            
                    <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseGestionDroits" aria-expanded="false" aria-controls="collapseGestionDroits">
                        Gestion des droits
                      </button>
                      <div class="collapse" id="collapseGestionDroits">
                        <div class="card card-body">
                            <div class="custom-control custom-switch pt-2">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Promotion de la salle</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"  id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Vente boissons</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2"> Gestion planning équipe</label>
                            </div>
                            <div class="custom-control custom-switch pt-2">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Outil e-mailing</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input"  id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Gestion paie</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Gestion congès</label>
                            </div>
                          
                        </div>     
                </div> 
            </div>
        </div>
    </div>

    <div class="row">   
        <div class="col-md-12 col-xs-6 pt-5">
            <div class="col-md-6 col-xs-4">
                <button class="btn btn-success" type="button">
                    Ajouter un partenaire
                  </button>
            </div>     
        </div> 
    </div>
</div>
   

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
            <script src="/get-fit/script/script.js"></script>

</body>
</html>