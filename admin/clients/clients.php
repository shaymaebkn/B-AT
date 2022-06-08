<?php include '../navadmine.php'; ?>
     <?php 
        include_once '../../connect/connect.php';
        $statement = $bd -> query("SELECT * FROM `clients`");
        $product = $statement->fetchAll(PDO::FETCH_OBJ);
     ?>