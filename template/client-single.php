<?php
 require_once 'pdo.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/get-fit/style/style.css">
    <script src="https://kit.fontawesome.com/e95fdf927c.js" crossorigin="anonymous"></script>


    <title>Page enseigne</title>
</head>

<body>

<?php 
    require 'header.php';
?>
    <div class="container pt-3">
        <div class="row"> 
                <a class="ml-15 btn btn-secondary" href="/get-fit/template/client-listing.php"
                    role="button">
                    Retour liste partenaires
                </a>
        </div>
    </div>
        <section>
                <div class="row">
                        <div class="container client-header-single pt-5">
                        <div class="row col-md-12 col-xs-6 space-between">
                            <div class="client-name col-md-4 col-xs-2 badge badge-secondary">
                                <p class="mt-10 pr-5 pl-5 fs-16">Get Fit Bordeaux</p>
                        </div>

                        <div class="client-id col-md-4 col-xs-2 badge badge-secondary">
                                <p class="mt-10 pr-5 pl-5 fs-16">client_id</p>
                        </div>
                        </div>
                        <div class="row col-md-12 col-xs-6 space-between pt-2">

                            <img src="/get-fit/assets/get-fit-bordeaux.png" alt="" style="width:360px">

                            
                            <div class="client-id col-md-4 col-xs-2 badge badge-secondary">
                            <?php //foreach ($mysqlConnection->query('SELECT * FROM clients', PDO::FETCH_ASSOC) as $clients) { ?>
                                <p class="mt-10 pr-5 pl-5 fs-16" style> <?php //echo $clients['client_dpo'];?>client_dpo</p>
                                <p class="mt-10 pr-5 pl-5 fs-16" style><?php //echo $clients['client_technical_support'];?>client_technical_support</p>
                                <p class="mt-10 pr-5 pl-5 fs-16" style><?php //echo $clients['client_commercial_contact'];?>client_commercial_contact</p>
                            </div>
                            <?php
                                //}
                                ?>
                        </div>
                        <div class="row col-md-12 col-xs-6 pt-2">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1" id="client-toggle-activation">
                                    <p> Non actif </p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>

            <section>
                <div class="container client-locationsborder-top pt-5">
                    <h1 class="pb-2">Gestion des enseignes</h2>
                    <div class="row">
                        <div class="col-md-6 col-xs-4 p-2">
                            
                            <img src="/get-fit/assets/get-fit-bordeaux.png" class="card-img-top rounded-lg"
                                alt="">
                            <div class="custom-control custom-switch pt-2">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Actif</label>
                            </div>
                            <h5 class="fw-700 pt-3">Gestion des droits</h5>
                        </div>

                        <div class="col-md-6 col-xs-4">
                        <?php foreach ($mysqlConnection->query('SELECT * FROM enseignes', PDO::FETCH_ASSOC) as $enseignes) { ?>
                            <div class="card-body">
                                <h5 class="branch-id fw-700"><?php echo $enseignes['location_name'];?></h5>
                                <p class="branch-address"><?php echo $enseignes['location_address'];?></p>
                                <p class="branch-description">location_description</p>
                                <a class="btn btn-secondary" href="#" role="button">Voir le site de l'enseigne</a>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-xs-2 p-2">

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
                        </div>
                        <div class="col-md-4 col-xs-2 p-2">

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
                <div class="container client-locations border-top pt-5">
                    <div class="row">
                        <div class="col-md-6 col-xs-4 p-2">
                            <img src="/get-fit/assets/get-fit-bordeaux.png"class="card-img-top rounded-lg"
                                alt="">
                            <div class="custom-control custom-switch pt-2">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Actif</label>
                            </div>
                            <h5 class="fw-700 pt-3">Gestion des droits</h5>
                        </div>

                        <div class="col-md-6 col-xs-4">
                            <div class="card-body">
                                <h5 class="branch-id fw-700">Get Fit Bordeaux Cenon</h5>
                                <p class="branch-address">branch_address</p>
                                <p class="branch-description">branch_description</p>
                                <a class="btn btn-secondary" href="#" role="button">Voir le site de l'enseigne</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-xs-2 p-2">

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
                        </div>
                        <div class="col-md-4 col-xs-2 p-2">

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
                <div class="container client-locations border-top pt-5">
                    <div class="row">
                        <div class="col-md-6 col-xs-4 p-2">
                            <img src="/get-fit/assets/get-fit-bordeaux-cenon.png" class="card-img-top rounded-lg"
                                alt="">
                            <div class="custom-control custom-switch pt-2">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Actif</label>
                            </div>
                            <h5 class="fw-700 pt-3">Gestion des droits</h5>
                        </div>

                        <div class="col-md-6 col-xs-4">
                            <div class="card-body">
                                <h5 class="branch-id fw-700">Get Fit Bordeaux Cours de l'Intendance</h5>
                                <p class="branch-address">branch_address</p>
                                <p class="branch-description">branch_description</p>
                                <a class="btn btn-secondary" href="#" role="button">Voir le site de l'enseigne</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-xs-2 p-2">

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
                        </div>
                        <div class="col-md-4 col-xs-2 p-2">

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

            </section>
    </main>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="/get-fit/script/script.js"></script>

</body>
</html>