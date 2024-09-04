<?php



if(isset($_POST["sub"])){
    $xyz=$_POST['nm'];
setcookie("myname",$xyz,time()+2555555,"/");
echo "coookies have been saved";
 
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" method="post" action="">
<input type="text" name="nm" placeholder="enter your name">
<input type="text" name="pass" placeholder="enter your password">
<input type="submit" name="sub" value="Submit Your Form">

</form>
</body>
</html>