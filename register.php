<!DOCTYPE html>
<html lang="en">
<?php include 'includer.php';?>


<title>ACHI - Register</title>

<head>

</head>


<body>

<div class="container">


<div class="col-lg-4.5 col-md-3.5 col-sm-3 col-xs-1">
</div>

<div class="col-lg-3 col-md-5 col-sm-6 col-xs-10 whitebg focus">

  <div class="title">
      <h1>ACHI</h1>
      <br>
      <h2>Goals for your life.</h2>
</div>

    <form action="reg_process.php" method="POST">
      <div class="form-group">
        <input type="username" class="form-control" id="username" name="input_username" placeholder="Username">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="pwd" name="input_password" placeholder="Password">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="pwd" name="input_passwordagain" placeholder="Confirm Password">
      </div>
      <input type="submit" class="cleanButton" value="Sign up">
      <!-- <button type="register" class="btn btn-block">Sign up</button> -->
      </form>
      <br><br>
    <span class="text">Already have an account?</span><br><br><a href="index.php">Log in here</a>
      <br><br><br>



</div>

<div class="col-lg-4.5 col-md-3.5 col-sm-3 col-xs-1">
</div>


</div>

</body>


</html>
