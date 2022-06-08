<?php

    include_once '../../connect/connect.php';

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $description = $_POST['Description'];
    $speciality = $_POST['Speciality'];
    $password = $_POST['Password'];
    $statement = $bd->prepare("INSERT INTO `coach`(`fname`, `Lname`, `email`, `Description`,
                                             `Speciality`, `Password`) VALUES  (?,?,?,?,?,?)");
    $result = $statement->execute([$fname,$Lname,$email,$description,$speciality,$password]);

    if ($result === TRUE) {
        header('Location: addcoach.php?mensaje=registrado');
    } else {
        header('Location: addcoach.php?mensaje=error');
        exit();
    }
    
?>