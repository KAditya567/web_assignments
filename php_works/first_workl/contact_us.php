<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>contact_us</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
 <nav>
 <?php
    include("header.php");
    
  
  ?>
  
 </nav>
  <main>
    <div class="photo" style="
          background: url('https://source.unsplash.com/random/?contacts/')
            no-repeat;
          background-size: cover;
        ">
      <div style="display: inline-block;margin: 250px 0px;padding: 10px;width: 750px;">
        <h1>Contact_us</h1>
        <p>
          Nature is a British weekly scientific journal founded and based in
          London, England. As a multidisciplinary publication, Nature features
          peer-reviewed research from a variety of academic disciplines,
          mainly in science and technology
        </p>
      </div>
    </div>
    <div style="padding: 20px 0px; text-transform: capitalize; background: url('https://images.pexels.com/photos/1076039/pexels-photo-1076039.jpeg?cs=srgb&dl=pexels-andreea-ch-371539-1076039.jpg&fm=jpg') ;background-repeat: no-repeat; background-size: cover;">
      <h1 style="margin-bottom: 10px; margin-left: 20px; color: white;">Contact_us</h1>
      <hr>
      <form action="data.php" method="post">
        <div class="content" style="margin:auto; margin-top: 80px;">
          <div style="color: white; display: block; margin:auto; border: 1px solid rgba(255, 255, 255, 0.448); box-shadow: 0px 0px 20px black; padding: 50px; width: 500px;backdrop-filter: blur(10px); margin-bottom: 20px;" >
            <div>
              
              <h1 style="text-align: center; margin-bottom: 20px;">form</h1>  
              <hr style="margin-bottom: 20px;">
              <br>
              <label for="">User_name :-</label>
              <br>
              <input style="width: 90%;" type="text" name="naam" placeholder="Enter your name" />
              <br>
              <label for="">Age :-</label>
              <br>
              <input type="number" name="age" placeholder="age">
              <br>
              <label for="gender">Gender :-</label>
              <input style="width: 40px;" type="radio" name="gender" value="male">male
              <input style="width: 40px;" type="radio" name="gender" value="female">female
              <br>

              <label for="">Email :-</label>
              <br>
              <input type="email" name="email" placeholder="Enter your Email">
              <br>
              <label for="">Phone no :-</label>
              <br>
              <input type="number" name="phone" placeholder="enter your phone no.">
              <br>
              <label for="">Work experience :-</label>
              <br>
              <select style="width: 90%; margin: 10px 0px; padding: 6px; outline: none;" name="xyz" id="">
                <option value="professional">professional</option>
                <option value="non-professional">Non - professional</option>
              </select>
              <br>
              <label for="">How may we help you ?</label>
              <br>
              <textarea style="padding: 10px; margin: 10px 0px;" name="txt" rows="10" cols="43" id=""
                placeholder="Help me understand how can i help you ?"></textarea>
              <br>
              <input type="submit" name="sub" id="">
            </div>
          </div>
        </div>


      </form>
    </div>
    </div>
    </div>
  </main>
  <footer>
    <hr>
  <?php
    include("footer.php");
  ?>
  </footer>
</body>

</html>