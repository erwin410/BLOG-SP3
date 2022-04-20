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
    <link rel="stylesheet" href="../styling/crud.css">
    <title>Admin CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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

        <div class="table">
            <div class="table-header">
                <p>Liste des Articles</p>
                <div>
                    <button class="add-new">+ Ajouter</button>
                </div>
            </div>

            <div class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Nom</th>
                            <th>Date</th>
                            <th>Contenu</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="../Images/Post1.jpg" ></td>
                            <td>Test</td>
                            <td>Yumi</td>
                            <td>02-16-21</td>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>
                                <button><i class="fa-solid fa-book-open"></i></button>
                                <button><i class="fa-solid fa-pen-to-square"></i></button>
                                <button><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>