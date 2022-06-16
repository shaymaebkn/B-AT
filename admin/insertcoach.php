<?php

    include_once '../../connect/connection.php';

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $description = $_POST['Description'];
    $speciality = $_POST['Speciality'];
    $password = $_POST['Password'];
    
    $requete = ("INSERT INTO `coach`(`fname`, `Lname`, `email`, `Description`, 
    `Speciality`, `Password`) VALUES ('$fname','$Lname','$email','$description','$speciality','$password')");
    
    $query = mysqli_query($con,$requete);
    if ($query === TRUE) {
        header('Location: addcoach.php?mensaje=registrado');
    } else {
        header('Location: addcoach.php?mensaje=error');
        exit();
    }
    
?>