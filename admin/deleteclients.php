<?php 
    if(!isset($_GET['id'])){
        header('Location: clients.php?mensaje=errormakansh');
        exit();
    }

    include '../../connect/connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM clients where clientid='$id'";
    $query = mysqli_query($con,$sql);
    if ($query === TRUE) {
        header('Location: clients.php?mensaje=deleted');
    } else {
        header('Location: clients.php?mensaje=error');
    }
    
?>