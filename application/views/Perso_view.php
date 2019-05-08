<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="96x96" href="../../images/icone.png">
        <title> Modifications d'informations personnelles </title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
            <a class="navbar-brand" href="../index.php">
                <img src="../../images/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
                CVVEN
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                                       
                    <li class="nav-item">
                        <a class="nav-link" href="">À propos de nous</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../G">Gestion du compte</a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                     <li class="nav-item">
                        <a class="nav-link" href="connexions">Se Connecter</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="inscriptions">Créer un compte</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <form>
            <?php foreach ($adherent as $info): ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName4">Nom</label>
                    <input type="text" class="form-control" id="inputName4" name="nom" value="<?php echo $info['nom_adherent']; ?>" required="">
                </div>
                 <div class="form-group col-md-6">
                    <label for="inputName4">Prenom</label>
                    <input type="text" class="form-control" id="inputName4" name="prenom" value="<?php echo $info['prenom_adherent']; ?>"  required="">
                </div>
                
            </div>
            
            <div class="form-row">
                <div class="form-group">
                <label for="inputAddress">Adresse</label>
                <input type="text" class="form-control" id="inputAddress" name="adresse" value="<?php echo $info['adresse_adherent'] ;?>"  required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputCity">Ville</label>
                    <input type="text" class="form-control" id="inputCity" name="ville" value="<?php echo $info['ville_adherent'] ;?>"  required="">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $info['email_adherent'] ;?>"  required="">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Identifiant</label>
                    <input type="text" class="form-control" id="inputId4" name="id" value="<?php echo $info['login_adherent'];?>"  required="">
                </div>
            </div>
            <?php endforeach; ?>
            <input type="submit" class="btn btn-primary" value="Mettre à jour">
        </form>
    </body>
</html>

