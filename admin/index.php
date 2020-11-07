<?php $page = 'index';
include 'inc/header.php'; 
?>

      <!-- Content Section -->
      <div class="content-wrapper" data-aos="fade-left" data-aos-duration="1000">
        <div class="content">
          <div class="row m-b-30">

            <div class="col-xl-12 col-md-12">
              <div class="card trans_sec">
                <div class="card-body">
                  <div class="card-header m-b-10">
                    <h3 class="d-inline font-primary">All Menus</h3> 
                    <div class="card_icon"><i class="mdi mdi-food-fork-drink"></i></div>
                  </div>
                  <div class="trans_wrap table-responsive">
 
                    <?php
                    //Database Connection
                    include "inc/connection.php";
                    $query = "SELECT * FROM menu ORDER BY menu_id DESC LIMIT 8";
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

                  </div>
                </div>
              </div>
            </div> 
        </div>   
        <!-- end: row (2nd)-->

          <div class="row">
            <!-- Top Statistics -->
            <div class="col-md-12 col-sm-12">
              <div class="row">
                <div class="col-xl-6 col-sm-12  m-b-30 revenue_anlyt_sec">  
                  <div class="card">
                    <div class="card-body"> 
                        <div class="media-body">
                          <p class="f-w-500">Reservation Analytics <span class="f-w-700 font-primary ml-2">78.34%</span></p>  
                        </div>

                        <div class="card_icon"><i class="mdi mdi-finance"></i></div> 

                        <div class="chartjs-wrapper">
                          <canvas id="revenue_anlyt"></canvas>
                        </div>

                        <div class="row">
                          <div class="col-4">
                            <div class="text-center mt-4">
                              <p class="mb-2 text-truncate"><i class="mdi mdi-circle font-primary font-size-10 mr-1"></i> This month</p>
                              <h5>454 Booked</h5>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="text-center mt-4">
                              <p class="mb-2 text-truncate"><i class="mdi mdi-circle font-size-10 mr-1"></i>  This Year </p>
                              <h5>442 Booked</h5>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="text-center mt-4">
                              <p class="mb-2 text-truncate"><i class="mdi mdi-circle font-size-10 mr-1"></i> Previous Year </p>
                              <h5>42 Booked</h5>
                            </div>
                          </div>
                        </div> 
                    </div>
                  </div> 
                </div>
                <!-- end: Reservation Any-->

                <div class="col-xl-6 col-md-12 col-sm-12 m-b-30 sales_overview_sec">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-header m-b-0">
                        <h3 class="d-inline font-primary">Reservation </h3>
                        <div class="card_icon"><i class="mdi mdi-settings-outline"></i></div>
                      </div> 
                      
                      <div class="p-t-15">
                        <div class="table-responsive">

              <?php
              //Database Connection
              include "inc/connection.php";
              $query = "SELECT * FROM reservation ORDER BY book_id DESC LIMIT 6";
              $result = mysqli_query($connection,$query) or die("Failed");
              $count = mysqli_num_rows($result);
                          if($count > 0){ ?>

                    <table class="mb-0 table table-bordered">
                      <thead>
                        <tr class="heading"> 
                          <th scope="col">Name</th>
                          <th scope="col">Email Address</th>
                          <th scope="col">Phone</th>  
                        </tr>
                      </thead>
                      <tbody>
                <?php  
                    while($row = mysqli_fetch_assoc($result)){  
                ?>
                        <tr> 
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
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- End:  Sale Overview -->


                 <div class="col-xl-6 col-md-12 col-sm-12 m-b-30">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-header">
                        <h3 class="d-inline font-primary">Visitor by Locations</h3>
                        <div class="card_icon"><i class="mdi mdi-settings-outline"></i></div>
                      </div> 
                      <div class="vector_map_world">
                        <div id="world" style="height: 100%; width: 100%;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End:  Revenue by Locations -->

                <div class="col-xl-6 col-sm-12 m-b-30"> 
                  <div class="card">
                    <div class="card-body"> 
                        <div class="media-body">
                          <p class="f-w-500">Today Total visits <span class="f-w-700 font-primary ml-2">88.34%</span></p>
                          <h4 class="mb-0">1452</h4>
                        </div>
                        <div class="card_icon"><i class="mdi mdi-chart-pie"></i></div> 
                    </div> 
                    <div class="chartjs-wrapper">
                      <canvas id="barChart"></canvas>
                    </div>
                  </div>
                </div>
                <!-- end: Total visitor -->
              </div>
            </div>
            <!-- col-md-7 -->
          </div>  <!-- end: row (1st)-->
          <!-- End: row (3rd)-->
        </div> <!-- End: .content -->
      </div>
      <!-- End: content-wrapper Section -->

<?php include 'inc/footer.php'; ?>
