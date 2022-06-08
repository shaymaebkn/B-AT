<?php 
    if(!isset($_GET['id'])){
        header('Location: addcoach.php?mensaje=errormakansh');
        exit();
    }

    include '../../connect/connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM coach where coachid='$id'";
    $query = mysqli_query($con,$sql);
    if ($query === TRUE) {
        header('Location: addcoach.php?mensaje=deleted');
    } else {
        header('Location: addcoach.php?mensaje=error');
    }
    
?>