<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sushi Monster - Restaurant Admin Dashboard</title>

 
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
  <!-- PLUGINS CSS STYLE -->

  <!--BootStrap -->
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
 

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/techki.css" />
  <link id="sleek-css" rel="stylesheet" href="assets/css/style.css" />



  <!-- FAVICON -->
  <link href="assets/images/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


<body id="body">

  <div class="signup_wrapper">
    <div class="row justify-content-center align-content-center vh-100">
        <div class="col-xl-4 col-sm-7 col-lg-6">
          <div class="card">
            <div class="card-body p-5 rounded-20">
              <h4 class="text-center m-b-20">Sign Up</h4>

                  <?php
                    if(isset($_POST['submit'])){
                      //Database Connection
                      include "inc/connection.php";
                      $fname = mysqli_real_escape_string($connection,$_POST['fname']); 
                      $user = mysqli_real_escape_string($connection,$_POST['user']);
                      $password = mysqli_real_escape_string($connection,md5($_POST['password']));
                      $email = mysqli_real_escape_string($connection,$_POST['email']); 

                      $query = "SELECT username FROM user WHERE username='$user'";
                      $result = mysqli_query($connection, $query) or die("Query Faild");

                      $count = mysqli_num_rows($result);
                      if($count > 0){
                          echo "User Name Already Exists";
                      }else{
                          $query1 = "INSERT INTO user (name,username,password,email) 
                          VALUE ('$fname','$user','$password','$email')";
                          $result1 = mysqli_query($connection, $query1) or die("Query Faild.");

                          if($result1==true){
                              header("location: sign-in.php");
                          }
                      }
                    }
                  ?>

              <form  action="" method ="POST" autocomplete="off">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="name"  name="fname" class="form-control input-lg" id="name" placeholder="Full Name">
                  </div>
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" name="email" class="form-control input-lg" id="email" placeholder="Email">
                  </div>
                  <div class="form-group col-md-12 mb-4">
                    <input type="name" name="user" class="form-control input-lg" id="email" placeholder="Username">
                  </div>
                  <div class="form-group col-md-12 ">
                    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
                  </div>
                  <div class="col-md-12"> 
                    <button type="submit"  name="submit" class="btn btn-lg btn-primary btn-block m-t-10">Sign Up</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
</body>

</html>