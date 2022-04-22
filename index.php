<?php
include './function.php';

$mysqli = new mysqli("192.168.64.2", "user1", "", "social");
if ($mysqli->connect_errno) {
    echo "Problème de connexion à la base de données !";
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="./styling/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navigation Starts -->
        <header>
            <div class="container header">
                <a href="#" class="logo">Marg.<span>Lab</span></a>
                <div class="menutoggle">
                    <i class="fas fa-bars"></i>
                </div>

                <ul class="navigation">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="./backend/Listcrud.php">crud</a></li>
                </ul>
            </div>
        </header>
    <!-- Navigation Ends -->

    <!-- Main Content Starts -->
    <div class="container main">
           <?php 
            showPost(AllArticles($mysqli));
           ?>
</div>
    <!-- Main Content ends -->

    <!-- Footer Starts -->
        <!-- <footer>
            <div class="container footer">
                <p>Future Coders © 2022</p>
            </div>
        </footer> -->
    <!-- Footer Ends -->
    <script src="./script/script.js"></script>
</body>
</html>
<?php
$mysqli->close();
?>