<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.css") ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css") ?>">
    <title>Document</title>
</head>
<body>
<div class="row col-md-12">
        <div class="col-md-3 p-3 bg-light " style="width: 280px;height: 100vh">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Society Name</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                        Code
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                        Plan
                    </a>
                </li>
                <li>
            </ul>
        </div>
        <div class="col-md-9">
                <div class="container">
                    <h1 class="display display-4 offset-md-4">Information societe</h1>
                    <br>
                    <ul>
                        <li class="ms-3 ">Nom de la societe : <?=$societe['name'] ?></li>
                        <li class="ms-3 mt-1">Fondateur : <?=$societe['fondateur'] ?></li>
                        <li class="ms-3 mt-1">Date de creation : <?=$societe['date_creation'] ?></li>
                        <li class="ms-3 mt-1">Numero d'identite fiscal: <?=$societe['nif'] ?></li>
                        <li class="ms-3 mt-1">Siege : <?=$societe['siege'] ?></li>
                        <li class="ms-3 mt-1">Numero statistique :  <?=$societe['num_stat'] ?></li>
                        <li class="ms-3 mt-1">Status : <a href="<?= base_url(sprintf('index.php/files/download?path=%s',$societe['status']))?>" >Telecharger </a></li>
                    </ul>
                </div>
    <form action="files/upload" method="post" enctype="multipart/form-data">
        <input type="file" name="test">
        <input type="submit" value="test">
    </form>
        </div>

</div>
    <script src="<?php echo site_url('assets/bootstrap/js/bootstrap.bundle.js') ?> "></script>
</body>
</html>