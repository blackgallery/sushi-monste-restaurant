<?php
session_start();
// if(isset($_SESSION['username'])){
//     header("location: index.php"); // go to post page
// }
?>

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
 
<body> 
  <div class="login_wrapper">
    <div class="row justify-content-center align-content-center vh-100">
        <div class="col-xl-4 col-sm-7 col-lg-6">
          <div class="card">
            <div class="card-body p-5"> 
              <h4 class="text-center text-uppercase m-b-20">Sign In</h4>

                  <!-- Form Start -->
                  <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="" required>
                      </div>
                      <input type="submit" name="login" class="btn btn-lg btn-primary btn-block mb-4" value="Sign In" /> 
                      <p>Don't have an account yet ?
                        <a class="text-blue" href="sign-up.php">Sign Up</a>
                      </p>
                  </form>
                  <!-- /Form  End -->

                  <?php
                    if(isset($_POST['login'])){
                        include "inc/connection.php";
                        $username = mysqli_real_escape_string($connection,$_POST['username']);
                        $password = md5($_POST['password']);
                        $query = "SELECT user_id,username,role FROM user WHERE username='{$username}' AND password='{$password}'";
                        $result = mysqli_query($connection,$query) or die("Query Failed");
                        if(mysqli_num_rows($result) > 0 ){
                            while($row = mysqli_fetch_assoc($result)){
                                session_start();
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['user_id'] = $row['user_id'];
                                $_SESSION['role'] = $row['role'];
                                header("location: index.php");
                            }
                        }else{
                            echo "Username and Password are not matched";
                        }
                    }
                ?>

           </div>
          </div>
        </div>
      </div>
    </div> 
  </body>
</html>