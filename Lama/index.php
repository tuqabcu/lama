<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pre-genetic Counseling Agent</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><img src="images/logo.png" style="height:200px; width:200px" />
       <br/><b style="color: #2D4B69;">Pre-genetic Counseling<span style="color: #616065;"> Agent</span></b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input name="em" type="text" class="form-control" placeholder="E-Mail" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pw" type="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <a href="signup.php" class="login-box-msg" style="color: #2D4B69;">New User, <br/>&nbsp;&nbsp;&nbsp;&nbsp; <i><b>Click here</b></i></a>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button name="sub" type="submit" class="btn btn-primary btn-block" style="background-color: #2D4B69;">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <p id="loginerror" style="color:red; visibility:hidden"></p>
      </form>
  
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php 
  require_once './db/users.php';

  if(isset($_POST["sub"])){
    $em = $_POST["em"];
    $pw = sha1($_POST["pw"]);
    $rs = login($em, $pw);
    if($rs->num_rows > 0)
    {
      $row = $rs->fetch_assoc();
        $_SESSION["userid"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        echo '<script>window.location="home.php";</script>';
    }
    else{
      echo '<script>
              document.getElementById("loginerror").style.visibility = "visible";
              document.getElementById("loginerror").innerHTML = "<b>Login Failed</b>";
            </script>';
    }
  }
?>

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function(){
    localStorage.clear();
  });
</script>
</body>
</html>
