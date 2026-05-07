<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/stile.css">
    <title>Games as a Service</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed w-100">
            <div class="container">
                <a id="season_pass" class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#season_modal">
                    <img src="../imagenes/logo.png" alt="" height="120" width="400" class="me-2">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="menu">
                    <ul class="navbar-nav ms-auto align-items-center ">
                        <li class="nav-item">
                            <a href="tienda.php" class="nav-link">
                                <img src="../imagenes/protogemas.png" alt="" height="120">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tienda.php">Tienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login_modal">
                                <img src="../imagenes/perfil.png" alt="" height="50">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php include "season_pass.php"; ?>
        <?php include "login.php"; ?>
    </header>
