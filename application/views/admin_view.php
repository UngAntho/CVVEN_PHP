<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icone.png">
        <title>Espace administrateur</title>
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


                </ul>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                    <li class="nav-item active">
                        <a class="nav-link" href="Admin">Gestion des compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Connexions/Deconnexions">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h3><center> Bienvenue dans votre espace de gestion des compte Monsieur <?php foreach ($adherent as $data): echo $data['nom_adherent'];
endforeach;
?> </center></h3>
        <h4> Adherent </h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scopoe="col"><center>Login</center></th>
                    <th scopoe="col"><center>Prenom</center></th>
                    <th scopoe="col"><center>Nom</center></th>
                    <th scopoe="col"><center>Adresse</center></th>
                    <th scopoe="col"><center>Ville</center></th>
                    <th scopoe="col"><center>Numero</center></th>
                    <th scopoe="col"><center>Email</center></th>
                    <th scopoe="col"><center>Modification</center></th>
                    <th scopoe="col"><center>Suppression</center></th>
                </tr>
            </thead>
        <?php foreach ($liste as $ad):
            $this->load->helper('url'); ?>
            <tbody>
                <tr>
                    <th scope="row"><center> <?php echo $ad['login_adherent']; ?> </center></td>
                    <td><center> <?php echo $ad['prenom_adherent']; ?> </center></td>
                    <td><center> <?php echo $ad['nom_adherent']; ?> </center></td>
                    <td><center> <?php echo $ad['adresse_adherent']; ?> </center></td> 
                    <td><center> <?php echo $ad['ville_adherent']; ?> </center></td>
                    <td><center> <?php echo $ad['numero_adherent']; ?> </center></td> 
                    <td><center> <?php echo $ad['email_adherent']; ?> </center></td>
                    <td><center> <?php  $ad['numero_adherent']; ?>Modifier </center></td>
        <td><center><a href="<?php echo site_url('Admin/suppression/'.$ad['numero_adherent']);?>">Supprimer </a></center></td>
                </tr>
        <?php
            endforeach;
        ?>
            </tbody>
            </table>
        <a href="Inscriptions">Ajouter un adherent</a>

        <h4> Réservation </h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scopoe="col"><center>Numero</center></th>
                    <th scopoe="col"><center>date_reservation</center></th>
                    <th scopoe="col"><center>dateArriver_reservation</center></th>
                    <th scopoe="col"><center>dateDepart_reservaton</center></th>
                    <th scopoe="col"><center>etat</center></th>
                    <th scopoe="col"><center>Numero d'adherent</center></th>
                    <th scopoe="col"><center>type_pension</center></th>
                    <th scopoe="col"><center>menage</center></th>
                    <th scopoe="col"><center>Type habitation</center></th>
                    <th scopoe="col"><center>Validation</center></th>
                    <th scopoe="col"><center>Suppression</center></th>
                </tr>
            </thead>
        <?php foreach ($rsv as $rs): ?>
            <tbody>
                <tr>
                    <th scope="row"><center> <?php echo $rs['numero_reservation']; ?> </center></td>
                    <td><center> <?php echo $rs['date_reservation']; ?> </center></td>
                    <td><center> <?php echo $rs['dateArriver_reservation']; ?> </center></td> 
                    <td><center> <?php echo $rs['dateDepart_reservation']; ?> </center></td>
                    <td><center> <?php echo $rs['etat_reservation']; ?> </center></td> 
                    <td><center> <?php echo $rs['numero_adherent']; ?> </center></td>
                    <td><center> <?php echo $rs['type_pension']; ?> </center></td>
                    <td><center> <?php echo $rs['menage']; ?> </center></td>
                    <td><center> <?php echo $rs['typeHabitation']; ?> </center></td>
                    <td><center><a href="<?php echo site_url('Admin/valider/'.$rs['numero_reservation']);?>">Valider </a></center></td>
                    <td><center><a href="<?php echo site_url('Admin/supprimer/'.$rs['numero_reservation']);?>">Supprimer </a></center></td>
                </tr>
        <?php
            endforeach;
        ?>
            </tbody>
            </table>
</body>
</html>

