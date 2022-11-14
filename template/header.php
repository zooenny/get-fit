<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="script" href="script.js">
    <script src="https://kit.fontawesome.com/e95fdf927c.js" crossorigin="anonymous"></script>
    
    <title>Page partenaires</title>
</head>

<section> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="client-listing.php">Admin Get Fit</a>
                    <div class="collapse navbar-collapse" id="navbarNavDropDown">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="client-listing.php">Liste partenaires</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="page-formulaire.php">Ajouter un partenaire</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#Modal">
                        Mon compte
                      </button>
                      <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalLabel">Bonjour, Admin Get Fit</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Cliquez pour vous deconnecter.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                              <button type="button" class="btn btn-danger">Deconnexion</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </nav>
            </div>
        </div>
</section>

</html>