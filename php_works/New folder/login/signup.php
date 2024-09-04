<?php

// $conn=mysqli_connect("localhost","root","","data");


if(isset($_POST["login"])){

    header("location:login.php");
    
    }



if(isset($_POST['sub'])){

 //file upload

  $name=$_FILES["fff"]['name'];

  $upload="upload/".$name;
  $loc=$_FILES["fff"]["tmp_name"];
  if(move_uploaded_file($loc,$upload)){
  echo "file move successfully";
  
  }
  //file upload end

  $username= $_POST['userName'];
  $pass= $_POST['pass'];

  $name= $_POST['name'];

  $query="insert into data_table(username,password,name,photo)value('$username','$pass','$name','$upload')";
   if(mysqli_query($conn,$query)){
   echo "data has been inserted";
  };




}




?>





<html>
    <h1 align="center">Sign up</h1>
<div style="width:300px;margin:100px auto;">
<form name="form" method="post" action="" enctype="multipart/form-data">
<input type="text" Placeholder="username" name="userName"><br><br>
<input type="text" Placeholder="password" name="pass"><br><br>
<input type="text" Placeholder="enter your name" name="name"><br><br>
<input type="file" name="fff"><br><br>
<input type="submit" value="submit" name="sub">
<button name="login" name="login">Go to Login</button>

</div>


</form>
</html>