<?php include '../navadmine.php'; ?>

<?php

 include_once '../../connect/connection.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $requete = "SELECT * FROM `paques` where paqueid =$id";
    $query = mysqli_query($con,$requete);
 
       
    }else{
         header('Location: addpaque.php?mensaje=eroor');
        exit();
    }
?>
<div class="card-header">
                  editar data

                </div> 
                <?php 
                foreach ($query as $paque){
                    
                    ?>
                <form action="insertpaque.php?id=<?php echo $paque['paqueid']; ?>" method="POST" class="p-4">
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php  echo $paque['paqueid'];?>">
                        <label class="form-label" >Name</label>
                        <input type="text" class="form-control" name="fname"
                        value="<?php echo $paque['fname']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >description</label>
                        <input type="text" class="form-control" name="Description"
                        value="<?php echo $paque['Description']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >category</label>
                        <input type="text" class="form-control" name="Category"
                        value="<?php echo $paque['Category']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >price</label>
                        <input type="num" class="form-control" name="Price"
                        value="<?php echo $paque['Price']; ?>">

                    </div>
                    
                    </div>
                    <div class="d-grid">
                        
                        <input onclick="return confirm('are you sure you wanna edit this row?');" type="submit" class="btn btn-primary" name="edit" value="edit">
                    </div>
                    
                </form>
            </div>
            <?php }; ?>
        </div>
 