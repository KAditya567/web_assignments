<?php

if(isset($_POST["submit"])){
    echo "<pre>";
    print_r($_FILES["fff"]);
  echo "</pre>";

$name=$_FILES["fff"]['name'];
echo "$name";
$upload="upload/".$name;
$loc=$_FILES["fff"]["tmp_name"];
if(move_uploaded_file($loc,$upload)){
echo "file move successfully";
}



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
  <img src="" alt="">
    
<form name="form" method="post" action="" enctype="multipart/form-data">


<input type="file" name="fff">

<input type="submit" name="submit" id="sub">

</form>





</body>
</html>