<?php
ob_start();
$page = 'menu-table';
include 'inc/header.php'; 
?>

<?php
if(isset($_POST['submit'])){
    //Database Connection
    include "inc/connection.php";
    $menu_id = mysqli_real_escape_string($connection,$_POST['menu_id']);
    $m_title = mysqli_real_escape_string($connection,$_POST['m_title']);
    $m_description = mysqli_real_escape_string($connection,$_POST['m_description']); 
    $m_price = mysqli_real_escape_string($connection,$_POST['m_price']);

    $query2 = "UPDATE menu SET title='{$m_title}', description='{$m_description}', price='{$m_price}' WHERE menu_id = '{$menu_id}'"; // first_name=from database , {$f_name}= Form Name field
   
    $result2 = mysqli_query($connection, $query2) or die("Query Faild");
    if($result2 == true){
        header ("location: menu-table.php");
    }
}
?>


      <!-- Content Section -->
      <div class="content-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-lg-8 offset-lg-2  col-md-12 m-t-50 basic_form">
              <div class="card">
                <div class="card-body">
                  <div class="card-header">
                    <h3 class="d-inline">Menu Update </h3> 
                  </div>
<?php
    $menu_idd = $_GET['id'];
    include "inc/connection.php";
    $query = "SELECT * FROM menu WHERE menu_id = {$menu_idd}";
    $result = mysqli_query($connection,$query) or die("FAILED");
    $count = mysqli_num_rows($result);

    if($count > 0){
        while($row = mysqli_fetch_assoc($result)){
?>
                <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="menu_id"  class="form-control" value="<?php echo $row['menu_id'] ?>" placeholder="" >
                      </div>
                      <div class="form-group">
                          <label for="title">Menu Title</label>
                          <input type="text" name="m_title" class="form-control" id="title" value="<?php echo $row['title'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="des">Menu Description</label>
                          <textarea rows="4" name="m_description" class="form-control" id="des"><?php echo $row['description']?></textarea>
                      </div>
                      <div class="form-group">
                          <label for="price">Price</label>
                          <input type="text" name="m_price" class="form-control" id="price" value="<?php echo $row['price'] ?>" placeholder="" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
    <?php 
            }//while
        } //if
    ?>  
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
