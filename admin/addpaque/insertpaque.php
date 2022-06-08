<?php

    include_once '../../connect/connection.php';

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $description = $_POST['Description'];
    $Category = $_POST['Category'];
    $Price = $_POST['Price'];
    $requete = "INSERT INTO `paques`( `fname`, `Description`, `Category`, `Price`) VALUES  ('$fname','$description','$Category','$Price')";
    $query = mysqli_query($con,$requete);

    if ($query === TRUE) {
        header('Location: addpaque.php?message=register');
    } else {
        header('Location: addpaque.php?message=error');
        exit();
    }
    
?>