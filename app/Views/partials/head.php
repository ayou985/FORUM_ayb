<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSG FORUM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/./css/./style.css">
</head>


<nav class="navbar navbar-expand-lg navbar-light  pb-3">
    <div class="container-fluid">
        <a class="navbar-brand mt-2 mt-lg-0 " href="/">
            <img src="/public/./img/./psg_logo-removebg-preview.png" width="75px" alt="Logo" class="imgLogo">
            Forum
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <li class="nav-item">
                    <a class="nav-link " href="/logout"><i class="fa-solid fa-circle-plus"></i> Deconnexion</a>
                </li>
                <?php
                if ($_SESSION['user']['role'] == "Admin") {
                ?>
                    <li class="nav-item">
                        <a class="nav-link " href="/users"><i class="fa-solid fa-circle-plus"></i> Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/subject"><i class="fa-solid fa-circle-plus"></i> Ajout sujet</a>
                    </li>
                <?php
                }
            } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link " href="/register"><i class="fa-solid fa-circle-plus"></i> Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/connection"><i class="fa-solid fa-circle-plus"></i> Connexion</a>
                </li>

            <?php
            }
            ?>
        </ul>
    </div>
</nav>