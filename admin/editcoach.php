<?php include '../navadmine.php'; ?>

<?php

 include_once '../connect/connection.php';
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $requete = "SELECT * FROM `coach` where coachid =$id";
    $query = mysqli_query($con,$requete);
 
       
    }else{
         header('Location: addcoach.php?mensaje=eroor');
        exit();
    }
?>
<div class="card-header">
                  editar data

                </div> 
                <?php 
                foreach ($query as $paque){
                    
                    ?>
                <form action="insertcoach.php?id=<?php echo $paque['coachid']; ?>" method="POST" class="p-4">
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php  echo $paque['coachid'];?>">
                        <label class="form-label" >Name</label>
                        <input type="text" class="form-control" name="fname"
                        value="<?php echo $paque['fname']; ?>">

                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php  echo $paque['coachid'];?>">
                        <label class="form-label" >lName</label>
                        <input type="text" class="form-control" name="Lname"
                        value="<?php echo $paque['Lname']; ?>">

                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="id" value="<?php  echo $paque['coachid'];?>">
                        <label class="form-label" >email</label>
                        <input type="text" class="form-control" name="email"
                        value="<?php echo $paque['email']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >description</label>
                        <input type="text" class="form-control" name="Description"
                        value="<?php echo $paque['Description']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >speciality</label>
                        <input type="text" class="form-control" name="Speciality"
                        value="<?php echo $paque['Speciality']; ?>">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >password</label>
                        <input type="num" class="form-control" name="Password"
                        value="<?php echo $paque['Password']; ?>">

                    </div>
                    
                    </div>
                    <div class="d-grid">
                        
                        <input onclick="return confirm('are you sure you wanna edit this row?');" type="submit" class="btn btn-primary" name="edit" value="edit">
                    </div>
                    
                </form>
            </div>
            <?php }; ?>
        </div>
 