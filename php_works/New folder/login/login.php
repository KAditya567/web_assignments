<?php
$conn=mysqli_connect("localhost","root","","users");
if(isset($_POST['sub'])){
$username= $_POST['userName'];
$pass= $_POST['pass'];
$query="select * from userstable where username='$username' and password='$pass'";
$result=mysqli_query($conn,$query);
$total=mysqli_num_rows($result);
if($total==1){
    header("location:welcome.php");
    session_start();
    $_SESSION['sendname']=$username;
}else{
    echo "user name orpassword is wrong";
}
//$row=mysqli_fetch_array($result);
//echo "$row[name]";
}


if(isset($_POST["signup"])){

header("location:signup.php");

}






?>

<html>
    <h1 align="center">Login</h1>
<div style="width:300px;margin:100px auto;">
<form name="form" method="post" action="">
<input type="text" Placeholder="username" name="userName"><br><br>
<input type="text" Placeholder="password" name="pass"><br><br>
<input type="submit" value="Login" name="sub">
<button name="signup">Sign Up</button>

</div>


</form>
</html>