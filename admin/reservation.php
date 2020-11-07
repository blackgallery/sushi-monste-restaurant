<?php $page = 'reservation';
include 'inc/header.php';  
?>
 
      <!-- Content Section -->
      <div class="content-wrapper">
        <div class="content">
          <div class="row"> 
            <div class="col-md-12 col-sm-12">
              <div class="card basic_form">
                <div class="card-body">
                  <div class="card-header">
                    <h3 class="d-inline font-primary text-center"> Upcoming Reservation </h3>
                  </div>
                  <div class="table-responsive">

              <?php
              //Database Connection
              include "inc/connection.php";
              $query = "SELECT * FROM reservation ORDER BY book_id DESC";
              $result = mysqli_query($connection,$query) or die("Failed");
              $count = mysqli_num_rows($result);
                          if($count > 0){ ?>

                    <table class="mb-0 table table-bordered">
                      <thead>
                        <tr class="heading">
                          <th scope="col">S.No.</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email Address</th>
                          <th scope="col">Phone</th>  
                        </tr>
                      </thead>
                      <tbody>
                <?php 
                    $serial = 1;
                    while($row = mysqli_fetch_assoc($result)){  
                ?>
                        <tr>
                          <td class="col-1"><?php echo $serial ++; ?></td>
                          <td class="col-4"><?php echo $row['name']; ?></td>
                          <td class="col-4"><?php echo $row['email']; ?></td>
                          <td class="col-3"><?php echo $row['phone']; ?></td> 
                        </tr>
                <?php 
                    } //while
                ?>
                      </tbody>
        <?php
            }else{
                echo "No Data";
        } //if

        ?>
                  </table>
                  </div> <!-- end: table-responsive  -->  
                </div><!-- end: card-body -->    
              </div><!-- end: card -->    
            </div> <!-- end: col-md-6 -->    
            
 
 
          </div> <!-- .row --> 
        </div> <!-- .content -->
      </div>
      <!-- End: content-wrapper Section -->
 

<?php include 'inc/footer.php'; ?>