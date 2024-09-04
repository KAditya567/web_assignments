<?php
if(isset($_POST["signup"])){
  header("location:signin.php");
  }
$conn=mysqli_connect("localhost","root","","users");
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query ="select * from userstable where username='$username' and password='$password'";
  $result = mysqli_query($conn,$query);
  $total = mysqli_num_rows($result);
  if($total == 1){
      header("location:first_page.php");
      session_start();
      $_SESSION['user'] = $username;
    }else{
      echo "<script>alert('username or password incorrect');</script>";
      // script tag m krna h 
  }
  }  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <form action="" method="post">
      <h1>Log in</h1>
      <input type="text" placeholder="Username" name="username" />
      <i class="bi bi-person-fill icon user"></i>
      <br />
      <input type="password" placeholder="Password" name="password" />
      <i class="bi bi-eye-fill icon open"></i>
      <i class="bi bi-eye-slash-fill close"></i>
      <br />
      <div class="box">
        <div>
          <input type="checkbox" style="margin: 0px; width: 20px" />
          <label for="" style="font-size: large">Remember me</label>
        </div>
        <div>
          <a href="">Forget Password ?</a>
        </div>
      </div>
      <input type="submit" value="Login" name="login" />
      <div style="text-align: center; margin: 20px 0px 0px 0px">
        <label for="">Don't have an account ?</label>
        &nbsp;
        <a href="signin.php" name="signup">Sign up</a>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    </script>
  </body>
</html>
