<?php
session_start();
$getname = $_SESSION['user'];
$conn=mysqli_connect("localhost","root","","users");
$query="select* from userstable where username='$getname'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if($getname==true){
  echo "<script>alert('Welcome $row[firstname] $row[lastname]');</script>";
}else{
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <header>
      <nav>
        <div><h1>Welcome <?php echo "$row[firstname] $row[lastname]"?></h1></div>
        <div><a href="logout.php"><button>Log out</button></a></div>
      </nav>
    </header>
    <main>
      <div class="main">
        <div class="left">
          <div class="cnt">
            <img src="<?php echo"$row[photo]";?>" alt="image" />
          </div>
        </div>
        <div class="right">
          <div class="cnt">
            <span>
              <h1><?php echo "$row[firstname] $row[lastname]"?></h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut nisi
                quia ut saepe unde ad deserunt esse molestias atque et odio,
                consequuntur voluptas soluta, aperiam tempora illo quasi culpa sed
                corrupti nesciunt dolorum nam distinctio quam. Nesciunt non
                accusantium soluta sunt repellendus alias esse tenetur, quibusdam
                veritatis quam, in ipsa ut amet distinctio laborum aliquid eius
                dolore id. Beatae quidem exercitationem magni nihil amet odit eius
                ipsa ut numquam officiis harum doloribus aspernatur molestias
                accusantium, esse placeat! Minima ut quos nostrum consectetur, sequi
                laborum illum dolorem accusantium necessitatibus optio? Ratione,
                nostrum molestias unde tenetur minima ipsa sed accusamus iure error.
              </p>
            </span>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
