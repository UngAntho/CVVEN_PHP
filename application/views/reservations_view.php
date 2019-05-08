<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icone.png">
        <title>Réservations</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
                CVVEN
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="Reservations">Réservations</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="G">Gestion du compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Connexions/Deconnexions">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Reservations'); ?>
        <form>
            <div class="container-fluid">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Date d'arrivée</label>
                        <input type="date" class="form-control" id="inputName4" name="date_a" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputName4">Date de départ</label>
                        <input type="date" class="form-control" id="inputName4" name="date_d" required="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Formule ménage fin de séjour : </label>
                        <input type="radio" name="menage" value="1" id="menage_y"/> Oui
                        <input type="radio" name="menage" value="0" id="menage_n"/> Non
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Type de pension :</label>
                        <input type="radio" name="pension" value="demi_pension" id="demi_pension"/> Demi-pension
                        <input type="radio" name="pension" value="pension_complete" id="pension_complete"/> Pension complète
                    </div>
                </div>

                <div class="col-xs-3">
                    <p class="lead">Type de chambre :
                </div>
                <div class="row">   
                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="../images/normal.jpg" class="img-thumbnail" alt="Image 1" />
                            <div class="caption">
                                <p>
                                    <input type="radio" name="logement" value="2">
                                    entrée, douche et wc, 2 chambres à 2 lits avec coin toilette et balcon.<br>
                                    Prix : 50€
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="../images/double.jpg" class="img-thumbnail" alt="Image 1" />
                            <div class="caption">
                                <p>
                                    <input type="radio" name="logement" value="3">
                                    entrée, douche et wc, 1 lit double.<br>
                                    Prix : 70€
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="../images/handicape.jpg" class="img-thumbnail" alt="Image 1" />
                            <div class="caption">
                                <p>
                                    <input type="radio" name="logement" value="1"> 
                                    Logement adapté pour les personnes à mobilité réduite.<br>
                                    Prix : 60€
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="../images/trio.jpg" class="img-thumbnail" alt="Image 1" />
                            <div class="caption">
                                <p>
                                    <input type="radio" name="logement" value="4"> 
                                    3 lits séparés par une cloison mobile avec coin toilette, wc, douche. <br>
                                    Prix : 75€
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="thumbnail">
                            <img src="../images/quatre.jpg" class="img-thumbnail" alt="Image 1" />
                            <div class="caption">
                                <p>
                                    <input type="radio" name="logement" value="5">
                                    4 lits séparés par une cloison mobile avec douche, wc et balcon. <br>
                                    Prix : 90€
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Réserver !">
            </div>
        </form>
    </body>
</html>

