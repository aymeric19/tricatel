<?php

require_once 'include/config.php';

$plat= $bdd->query('SELECT * FROM plat ORDER BY id_plat DESC');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c70a4c5665.js" crossorigin="anonymous"></script>
    <title>tricatel</title>
</head>
<body class="body">
  <nav class="navbar navbar-expand-lg navbar-dark ">

	<div class="collapse navbar-collapse" id="navbarColor01">

        <div class="button d-flex flex-row-reverse mt-3 me-4">
        <a class="btn btn-success" href="include/connexion.php" role="button">Se connecter</a>
        </div>

	</div>
	</nav>
    <header id="baniere">
        <div class="hero-container">
            <img src="assets/img/food.png" class="img w-100" alt="">
        </div>

        <h1 class="text-center py-4"> Nos plats </h1>
    </header
        <div id="d1" class="row">

                <div class="col-12 align-content-center filtre d-flex flex-column py-3 flex-sm-wrap ">


                    <div class="type_ d-flex justify-content-center pb-3 flex-sm-wrap">
                      <h2 class="text-center pb-3 text-decoration-underline">Type:</h2>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1"> Plat sucré</label>

                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck2"> Plat salé</label>

                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck3">Petit déjeuner</label>

                            <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck4">Entrée</label>

                    </div>
                 </div>

                    <div class="regime d-flex justify-content-center pb-3 flex-sm-wrap">
                      <h2 class="text-center pb-3 text-decoration-underline">Regime:</h2>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck5">Fléxitarien</label>

                            <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck6">Végétarien</label>

                            <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck7">Végétalien</label>

                        </div>
                    </div>
                    <div class="continent d-flex justify-content-center pb-3 flex-sm-wrap">
                      <h2 class="text-center pb-3 text-decoration-underline">Origine:</h2>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck8">Européen</label>

                            <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck9">Américain</label>

                            <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck10">Asiatique</label>
                        </div>
                    </div>
            </div>



        <div class="row mx-5-lg pt-5">

        <?php
        while ($a = $plat->fetch()){
        ?>
            <div class=" col-12 col-md-6 col-lg-4 ">
                <div class="card plat" style="width: 18rem; height:28rem;">
                    <img src="<?= $a['url_image'] ?>" class="card-img-top img_plat" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $a['nom_plat']?></h5>
                        <p class="card-text"><?= $a['description'] ?></p>
                        <p class="card-text">#Entrée #Végétarien #Européen</p>
                    </div>
                </div>

            </div>
        <?php } ?>

            </div>

        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
