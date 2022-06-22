<?php include 'navview.php' ?>
<?php 
    include_once '../connect/connection.php';
    
        $requete = "SELECT * FROM `paques`" ;
        $query = mysqli_query($con,$requete);
  
     ?>
     <?php 
                                foreach($query as $data){ 
                                    ?>
        
<div class="row col-3 p-3">
  <div class="card " style="">
  <div class="row g-0">
    <div class="col-md-4">
    <input type="hidden" value="<?php echo $data->Coachid; ?>">
    
    <img src="<?php echo $data['picture']; ?>" class="img-fluid rounded-start" alt="...">
    
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $data['fname']; ?></h5>
        <p class="card-text"><?php echo $data['Description']; ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $data['Speciality']; ?></small></p>
      </div>
    </div>
    <button><a href="team.php?id=<?php echo $data->Coachid; ?>">blblblbl</a></button>
  </div>
  </div>
</div>

<?php 
                                }

                            ?>