<?php $page = 'menu-table';
include 'inc/header.php';  
?>
 
      <!-- Content Section -->
      <div class="content-wrapper">
        <div class="content">
          <div class="row"> 
            <div class="col-md-12 col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-header m-b-25">
                    <h3 class="d-inline font-primary"> All Menus </h3>
                    <div class="card_icon"><a href="menu-form.php" class="my-btn"> <i class="mdi mdi-plus"></i> ADD MENU </a></div>
                  </div>
                  <div class="table-responsive">

              <?php
              //Database Connection
              include "inc/connection.php";
              $query = "SELECT * FROM menu ORDER BY menu_id DESC";
              $result = mysqli_query($connection,$query) or die("Failed");
              $count = mysqli_num_rows($result);
                          if($count > 0){ ?>

                    <table class="mb-0 table table-bordered">
                      <thead>
                        <tr class="heading">
                          <th scope="col">Menu Title</th>
                          <th scope="col">Menu Description</th>
                          <th scope="col">Price</th> 
                          <th scope="col">Action</th> 
                        </tr>
                      </thead>
                      <tbody>
                <?php 
                    $serial = 1;
                    while($row = mysqli_fetch_assoc($result)){  
                ?>
                        <tr>
                          <td class="col-4"><?php echo $row['title']; ?></td>
                          <td class="col-6"><?php echo $row['description']; ?></td>
                          <td class="col-1"><?php echo $row['price']; ?></td> 
                          <td class="col-1">                              
                            <a href="menu-update.php?id=<?php echo $row['menu_id'] ?>" class="edit"> <i class="mdi mdi-square-edit-outline"></i></a> 
                            <a onclick="return confirm('Are You Sure?')" href='menu-delete.php?id= <?php echo $row['menu_id'] ?>'><i class='mdi mdi-delete-outline'></i></a>
                          </td>
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