<?php
if(isset($_POST["login"])){
  header("location:login.php");
  }
$conn = mysqli_connect("localhost", "root", "", "users");
if (isset($_POST['signin'])) {
  $pname = $_FILES["file"]['name'];
  $upload = "uploads/".$pname;
  $loc = $_FILES["file"]["tmp_name"];
  if (move_uploaded_file($loc, $upload)) {
    // echo "upload photo";    show krana h 
  }else {
    // echo "not upload photo";   show krana h 
  }
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query ="insert into userstable(firstname, lastname, username, password, photo)value('$firstname', '$lastname', '$username', '$password', '$upload')";
if (mysqli_query($conn, $query)) {
  echo "done";
}else {
  echo "not done";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign_in</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <h1>Sign in</h1>
      <input
        type="text"
        placeholder="First name"
        style="width: 45%"
        name="firstname"
      />
      &nbsp; &nbsp; &nbsp;
      <input
        type="text"
        placeholder="Last name"
        style="width: 45%"
        name="lastname"
      />
      <br />
      <input type="text" placeholder="Enter Username" name="username" />
      <i class="bi bi-person-fill user"></i>
      <br />
      <input type="password" placeholder="Create Password" name="password" />
      <i class="bi bi-eye-fill open"></i>
      <i class="bi bi-eye-slash-fill close"></i>
      <br />
      <input type="file" name="file" />
      <br />
      <input type="submit" style="width: 45%" name="signin" />
      &nbsp; &nbsp; &nbsp;
      <input type="submit" value="Login" style="width: 45%" name="login" />
      <!-- if type = button h fir kese work krega ?  -->
    </form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
