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
        <link rel="icon" type="image/png" sizes="96x96" href="../images/icone.png">
        <title> Connexion </title>
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
                </ul>
                <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                     <li class="nav-item active">
                        <a class="nav-link" href="connexions">Se Connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inscriptions">Créer un compte</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Connexions'); ?>
        
        <form>
            <div class="">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Identifiant</label>
                        <input type="text" class="form-control" id="inputLogin4" name="id" placeholder="Login" required="">
                    </div>                
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName4">Mot de passe</label>
                        <input type="password" class="form-control" id="inputLogin4" name="mdp" placeholder="Mot de passe" required="">
                    </div>                
                </div>
                <input type="submit" class="btn btn-primary" value="Se connecter">
            </div>
        </form>
    </body>
