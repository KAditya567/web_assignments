<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sasta zomato</title>
    <link rel="stylesheet" href="styl.css" type="text/css" />
  </head>
  <body>
    <header>
      <div class="menu">
        <div class="float">
          <h1>sasta zomato</h1>
        </div>
        <input type="text" placeholder="Search what you want" />
        <div class="one"><i class="fas fa-search search"></i></div>
        <a href=""><button style="cursor: not-allowed">login</button></a>
        <div class="right">
          <a href="">become a seller </a>
          <a href="">more <i class="fas fa-chevron-down arrow"></i></a>
          <div class="cart">
            <div class="">
              <i class="fas fa-cart-plus two"></i>
              <a href="cart.php" name="cart">cart</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main style="background-color: gray">
      <div class="container">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "shopping");
        $query = "select * from shoppingtable";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
          ?>
        <div class="child">
          <div class="pic-box">
            <img src="images/<?php echo $row['image'];?>" />
          </div>
          <h2><?php echo $row['name'];?></h2>
          <p>
            price -
            <?php echo $row['price'];?>
            rs
          </p>
          <label for="quantity">quantity</label>
          <input type="number" max="10" value="1" />
          <form action="" method="post">
            <input type="submit" value="add to cart" />
            <input type="submit" value="buy now" name="buy" />
          </form>
        </div>
        <?php  
        }
        ?>
      </div>
    </main>

    <script
      src="http://kit.fontawesome.com/a55d1ed81d.js"
      crossorign="anonymous"
    ></script>
  </body>
</html>
