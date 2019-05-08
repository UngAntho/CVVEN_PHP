<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icone.png">
        <title>Gestion du compte</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos de nous</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Reservations">Réservations</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="G">Gestion du compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Connexions/Deconnexions">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h3><center> Bienvenue dans votre espace de gestion de compte Monsieur <?php foreach ($adherent as $data): echo $data['nom_adherent'];
endforeach;
?> </center></h3>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scopoe="col"><center>Numero de réservation</center></th>
                    <th scopoe="col"><center>Type de réservation</center></th>
                    <th scopoe="col"><center>Date de demande</center></th>
                    <th scopoe="col"><center>Date d'arrivée</center></th>
                    <th scopoe="col"><center>Date de départ</center></th>
                    <th scopoe="col"><center>Etat de réservation</center></th>
                    <th scopoe="col"><center>Pension</center></th>
                    <th scopoe="col"><center>Menage</center></th>
                    <th scopoe="col"><center>Tarif</center></th>
                    <th scopoe="col"><center>Type de chambre</center></th>
                </tr>
            </thead>
        <?php foreach ($reservation as $reserv): ?>
            <tbody>
                <tr>
                    <th scope="row"><center> <?php echo $reserv['numero_reservation']; ?> </center></td>
                    <td><center> <?php echo $reserv['type_reservation']; ?> </center></td>
                    <td><center> <?php echo $reserv['date_reservation']; ?> </center></td>
                    <td><center> <?php echo $reserv['dateArriver_reservation']; ?> </center></td> 
                    <td><center> <?php echo $reserv['dateDepart_reservation']; ?> </center></td>
                    <td><center> <?php echo $reserv['etat_reservation']; ?> </center></td> 
                    <td><center> <?php echo $reserv['type_pension']; ?> </center></td>
                    <td><center> <?php echo $reserv['menage']; ?> </center></td>
                    <td><center> <?php echo $reserv['tarif']; ?> </center></td>
                    <td><center> <?php echo $reserv['typeHabitation']; ?> </center></td>
                </tr>
        <?php
            endforeach;
        ?>
            </tbody>
            </table>
<p class="lead">
    <a href="G/Mdp"> Modifier votre mot de passe </a>
</p>

</body>
</html>

