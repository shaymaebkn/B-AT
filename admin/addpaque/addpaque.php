     <?php include '../navadmine.php'; ?>
     <?php 
        include_once '../../connect/connection.php';
    $requete = "SELECT * FROM `paques`" ;
    $query = mysqli_query($con,$requete);
     ?>
  <!DOCTYPE html>
    <html lang="en">
    <div class="container mt-7">
      <div class="row justify-content-center">
           <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                  enter data of coaches

                </div>
                <form action="insertpaque.php" method="POST" class="p-4">
                    <div class="mb-3">
                        <label class="form-label" >name</label>
                        <input type="text" class="form-control" name="fname">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >description</label>
                        <input type="text" class="form-control" name="Description">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Category</label>
                        <input type="text" class="form-control" name="Category">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Price</label>
                        <input type="num" class="form-control" name="Price">

                    </div>
        
                    <div class="d-grid">
                        <!-- <input type="hidden" name="oculto" value="1"> -->
                        <input type="submit" name="add" class="btn btn-primary" value="add">
                    </div>
                    



                </form>
            </div>
        </div>

          <div class="col-md-7">
              <div class="card-header">
                  table of coaches 
                  <table class="table align-middle">
                      <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">fName</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col "colspane="2">Price</th>
                            

                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($query as $data){ 
                    ?>
                          <tr>
                              <td scope="row"><?php echo $data['paqueid']; ?></td>
                              <td><?php echo $data['fname']; ?></td>
                              <td><?php echo $data['Description']; ?></td>
                              <td><?php echo $data['Category']; ?></td>
                              <td><?php echo $data['Price']; ?></td>
                              <td>
                              <a class="text-success" href="edit.php?id=<?php echo $data['paqueid']; ?>"><i class="bi bi-pencil-square"></i></a>
                                <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="delete.php?id=<?php echo $data['paqueid']; ?>"><i class="bi bi-trash"></i></a>
                            </td>
                           </tr>          
                 
                             
                           
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>

              </div>

          </div>
       

    </div>



    

 
