<?php

@include '../config.php';

session_start();

if(!isset($_SESSION['admin_name'])) {
    header('location:../backend/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styling/home.css">
    <title>Liste des Poste</title>
</head>
<body>
        <header>
            <div class="container header">
                <a href="../index.php" class="logo">Marg.<span>Lab</span></a>
                <div class="menutoggle">
                    <i class="fas fa-bars"></i>
                </div>

                <ul class="navigation">
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="register_form.php" class="btn">register</a></li>
                    <li><a href="logout.php" class="btn">logout</a></li>
                </ul>
            </div>
        </header>
</body>
</html>