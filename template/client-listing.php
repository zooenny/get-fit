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
    
    <title>Page partenaires</title>
</head>

<body>

<?php 
    require 'header.php';
    require_once 'constants/text_constants.php';
   
?>

<section>
    <div class="container client-search pt-2">
        <div class="row">
            <div clas="col-md-12 col-xs-6">
                <nav class="navbar navbar-light">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un client"
                            aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </nav>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12 col-xs-6">
             <button type="button" class="btn btn-success pr-40">Actifs</button>
             <button type="button" class="btn btn-danger" id="non-active-button">Non actifs</button>
        </div>
    </div>
</section>

<section>
            <div class="container client-locations pt-2">
                <div class="row">
                <?php foreach ($mysqlConnection->query('SELECT * FROM clients', PDO::FETCH_ASSOC) as $clients) { ?>
                    <div class="col-md-4 col-xs-2 p-2">
                        <div class="card">
                            <img src="/get-fit/assets/get-fit-bordeaux.png"
                                class="card-img-top rounded-lg" alt="">
                            <div class="card-body">
                                <h5 class="client-name fw-700">                               
                                     <a href="/get-fit/template/client-single.php" style="color:black"> <?php echo $clients['client_name']; ?> </a>
                                </h5> 
                                <p class="client-location-nb"> <?php echo $clients['client_nb_of_locations']." "."enseignes"; ?> </p>                   
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1" id="activate-client1">Non actif</label>
                                </div>
                            </div>
                       </div>
                    </div>
                <?php
                    }                                  
                ?> 
                </div> 
            </div>
        </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-6 pt-5">
            <nav aria-label="pagination">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#" style="color:black">1</a></li>
                  <li class="page-item"><a class="page-link" href="#" style="color:black">2</a></li>
                  <li class="page-item"><a class="page-link" href="#" style="color:black">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" style="color:grey">Suivant</a>
                  </li>
                </ul>
              </nav>

        </div>
    </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>
<script src="/get-fit/script/script.js"></script>
</html>


