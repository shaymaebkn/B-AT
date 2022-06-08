<?php
 include_once '../../connect/connection.php';

    
 if(isset($_POST['add'])){

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
}elseif(isset($_POST['edit'])){

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $description = $_POST['Description'];
    $Category = $_POST['Category'];
    $Price = $_POST['Price'];

    $requete = "UPDATE `paques` SET `fname`='$fname',
    `Description`='$description',`Category`='$Category',`Price`='$Price' WHERE `paqueid`='$id'";
    $query = mysqli_query($con,$requete);

    if ($query === TRUE) {
        header('Location: addpaque.php?message=register');
    } else {
        header('Location: addpaque.php?message=error');
        exit();
    }


}
?>