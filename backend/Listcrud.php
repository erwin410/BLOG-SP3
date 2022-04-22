<?php 

include '../function.php';
include '../config.php';

$mysqli = connect();
if (!$mysqli) exit;

$tabPost = AllArticles($mysqli);

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
                    <button class="add-new"><a href="../backend/register.php">+ Ajouter</a></button>
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
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
      for($i = 0; $i < count($tabPost);$i++) {
      ?>
                        <tr>
                            <td><?= $tabPost[$i]['id'] ?></td>
                            <td><?= $tabPost[$i]['postimage'] ?></td>
                            <td><?= $tabPost[$i]['title'] ?></td>
                            <td><?= $tabPost[$i]['auteur'] ?></td>
                            <td><?= $tabPost[$i]['date'] ?></td>
                            <td><?= $tabPost[$i]['contenu'] ?></td>
                            <td><a href="../backend/update?id=<?= $tabPost[$i]['id'] ?>" class="fa-solid fa-pen-to-square" role="button"></a></td>
                            <td><a href="../backend/delete?id=<?= $tabPost[$i]['id'] ?>" class="fa-solid fa-trash" role="button"></a></td>
                            
                        </tr>
                        <?php 
      }
    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="../script/script.js"></script>
</body>
</html>