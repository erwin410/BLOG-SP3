<?php

include '../config2.php';

if (isset($_POST['submit'])) {
	$postimage = $_POST['postimage'];
	$title = $_POST['title'];
	$auteur = $_POST['auteur'];
	$date = $_POST['date'];
	$contenu = $_POST['contenu'];

	$sql = "INSERT INTO `articles` (postimage,title,auteur,date,contenu) VALUES ('$postimage','$title','$auteur','$date','$contenu')";

	$result=mysqli_query($con,$sql);

	if ($result) {
		// echo "Data inserted successfully";
		header('location:../backend/Listcrud.php');
	} else {
		die(mysqli_error($con));
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../styling/loginregister.css">

	<title>Formulaire D'ajout</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Ajout d'Articles</p>
			<div class="input-group">
				<input type="file" placeholder="Image" name="postimage" accept="image/png, image/jpg" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Title" name="title" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Auteur" name="auteur" required>
            </div>
			<div class="input-group">
				<input type="date" placeholder="Date" name="date" required>
            </div>
            <div class="input-group">
				<textarea name="contenu" placeholder="Contenu" id="" cols="30" rows="10" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
		</form>
	</div>
</body>
</html>