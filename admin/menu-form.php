<?php
ob_start();
$page = 'menu-form';
include "inc/header.php";  
?>
 
 
      <div class="content-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-lg-8 offset-lg-2  col-md-12 m-t-20 basic_form">
              <div class="card">
                <div class="card-body">
                  <div class="card-header">
                    <h3 class="d-inline font-primary">Add Menus</h3> 
                  </div>

                  <?php
                    if(isset($_POST['submit'])){
                      //Database Connection
                      include "inc/connection.php";

                      $m_title = mysqli_real_escape_string($connection,$_POST['m_title']);
                      $m_description = mysqli_real_escape_string($connection,$_POST['m_description']); 
                      $m_price = mysqli_real_escape_string($connection,$_POST['m_price']);

                      $query = "SELECT title FROM menu WHERE title='$m_title'";
                      $result = mysqli_query($connection, $query) or die("Query Faild");

                      $count = mysqli_num_rows($result);
                      if($count > 0){
                          echo "This Menu Already Exists";
                      }else{
                          $query1 = "INSERT INTO menu (title,description,price)
                          VALUE ('$m_title','$m_description','$m_price')";
                          $result1 = mysqli_query($connection, $query1) or die("Query Faild.");

                          if($result1==true){
                              header("location: menu-table.php");
                          }
                      }
                    }
                  ?>
                  <!-- Form Start -->
                  <form action="" method="post" autocomplete="off">  
                      <div class="form-group">
                          <input type="hidden" name="menu_id"  class="form-control" placeholder="" >
                      </div>
                    <div class="form-group">
                      <label for="name">Title</label>
                      <input type="text" name="m_title" class="form-control" id="name" placeholder="Menu Name..."> 
                    </div>
                    <div class="form-group">
                      <label for="des">Description</label>
                      <textarea rows="4" name="m_description" class="form-control" id="des" placeholder="Menu Description here..."> </textarea>
                    </div>
                     <div class="form-group">
                      <label for="sallery">Price</label>
                      <input type="text" name="m_price" class="form-control" id="sallery" placeholder="Enter Price">
                    </div>

                    <div class="form-footer pt-4 mt-4 border-top"> 
                      <input type="submit" name="submit" value="Submit"/>  
                      <input type="reset" value="Cancel" onclick="history.back();"/>   
                    </div>  
                  </form> <!-- End: Form  --> 
                </div> <!-- .card-body -->
              </div>  <!-- .card -->
            </div> <!-- .col-lg-6 m-t-30 basic_form -->
          </div> <!-- .row (2nd)--> 
        </div> <!-- .content -->
      </div>
      <!-- End: content-wrapper Section -->
 
<?php include 'inc/footer.php';
ob_end_flush();
?>