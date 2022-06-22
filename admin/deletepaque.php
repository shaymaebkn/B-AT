<?php 
    if(!isset($_GET['id'])){
        header('Location: addpaque.php?mensaje=errormakansh');
        exit();
    }

    include '../connect/connection.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM paques where paqueid='$id'";
    $query = mysqli_query($con,$sql);
    if ($query === TRUE) {
        header('Location: addpaque.php?mensaje=deleted');
    } else {
        header('Location: addpaque.php?mensaje=error');
    }
    
?>