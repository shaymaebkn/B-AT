    <?php include '../navadmine.php'; ?>
     <?php 
    include_once '../../connect/connection.php';
    $requete = "SELECT * FROM `coach`" ;
    $query = mysqli_query($con,$requete);
    ?> 
    <section>    
            <div class="">
                <div class="">
                  enter data of coaches
                </div>
                <form action="insertcoach.php" method="POST" class="p-4">
                    <div class="mb-3">
                        <label class="form-label" >fname</label>
                        <input type="text" class="form-control" name="fname">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >lname</label>
                        <input type="text" class="form-control" name="Lname">
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label" >email</label>
                        <input type="email" class="form-control" name="email">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Description</label>
                        <input type="text" class="form-control" name="Description">

                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Speciality</label>
                        <input type="text" class="form-control" name="Speciality">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >password</label>
                        <input type="password"  name="Password"  id="7a" class="form-control" placeholder="password"  >
                   
                    
                    <div class="d-grid">
                        <!-- <input type="hidden" name="oculto" value="1"> -->
                        <input type="submit" class="btn btn-primary" value="Add">
                    </div>
                </form>
            </div>
    </section> 
    <section>        
              <div class="">
                  table of coaches 
                  <table class="table ">
                      <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">fName</th>
                            <th scope="col">Lname</th>
                            <th scope="col">email</th>
                            <th scope="col">Description</th>
                            <th scope="col">Speciality</th>
                            <th scope="col "colspane="2">Password</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($query as $data){ 
                     ?>
                          <tr>
                              <td scope="row"><?php echo $data['Coachid']; ?></td>
                              <td><?php echo $data['fname']; ?></td>
                              <td><?php echo $data['Lname']; ?></td>
                              <td><?php echo $data['email']; ?></td>
                              <td><?php echo $data['Description']; ?></td>
                              <td><?php echo $data['Speciality']; ?></td>
                              <td><?php echo $data['Password']; ?></td>
                              <td>
                              <a class="text-success" href="edit.php?id=<?php echo $data['coachid']; ?>"><i class="bi bi-pencil-square"></i></a>
                              <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="deletecoach.php?id=<?php echo $data['coachid']; ?>"> <i class="bi bi-trash"></i></a>
                            </td>
                 
                             
                           
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>
              </div>
    </section>
</body>
</html>
    

   
    
