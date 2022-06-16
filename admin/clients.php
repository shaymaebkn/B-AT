<?php include 'navadmine.php'; ?>
     <?php
        include_once '../connect/connection.php';
        $requete = "SELECT * FROM `clients`" ;
        $query = mysqli_query($con,$requete);
     ?>


     <div class="col-md-7">
              <div class="card-header">
                  table of coaches 
                  <table class="table align-middle">
                      <thead>
                          <tr>
                            <th scope="col">client id</th>
                            <th scope="col">coach id</th>
                            <th scope="col">fName</th>
                            <th scope="col">lname</th>
                            <th scope="col">username</th>
                            <th scope="col "colspane="2">Number</th>
                            <th>email</th>
                            <th>Country</th>
                            <th>city</th>
                            <th>Age</th>
                            <th>height</th>
                            <th>weight</th>
                            <th>weight goal</th>
                            <th>type de coaching</th>
                            <th>hours of sleeping</th>
                            <th>physical acitivity</th>
                            <th>password</th>
                            

                          </tr>
                      </thead>
                      <tbody>
                      <?php 
                                foreach($query as $data){ 
                    ?>
                          <tr>
                              <td scope="row"><?php echo $data['clientid']; ?></td>
                              <td><?php echo $data['Coachid']; ?></td>
                              <td><?php echo $data['fname']; ?></td>
                              <td><?php echo $data['lname']; ?></td>
                              <td><?php echo $data['username']; ?></td>
                              <td><?php echo $data['Number']; ?></td>
                              <td><?php echo $data['email']; ?></td>
                              <td><?php echo $data['Country']; ?></td>
                              <td><?php echo $data['City']; ?></td>
                              <td><?php echo $data['Age']; ?></td>
                              <td><?php echo $data['Height']; ?></td>
                              <td><?php echo $data['Weight']; ?></td>
                              <td><?php echo $data['weight_goal']; ?></td>
                              <td><?php echo $data['type_coaching']; ?></td>
                              <td><?php echo $data['hours_sleep']; ?></td>
                              <td><?php echo $data['physical_activity']; ?></td>
                              <td><?php echo $data['password']; ?></td>



                              <td>
                                <a onclick="return confirm('are you sure you wanna delete this row?');" class="text-danger" href="delete.php?id=<?php echo $data['clientid']; ?>"><i class="bi bi-trash"></i></a>
                            </td>
                           </tr>          
                 
                             
                           
                          <?php 
                                }
                            ?>
                      </tbody>
                  </table>

              </div>

          </div>