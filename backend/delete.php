<?php 

include '../config2.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `articles` WHERE id=$id";
    $result = mysqli_query($con,$sql);

    if ($result) {
        echo "Deleted successfull";
    } else {
        die(mysqli_error($con));
    }
}

?>