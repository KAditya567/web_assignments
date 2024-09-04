<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
        include"navbar.php";
        ?>
    </header>
    <main>
    <form
        name="register-form"
        action=""
        method="post"
        enctype="multipart/form-data"
        class="first"
      >
        <div>
          <h1>registration form</h1>
        </div>
        <div style="margin: 10px">
          <label for="username">username</label>
          <br />
          <input type="text" name="first" placeholder="First name" />
          <input type="text" name="last" placeholder="Last name" />
        </div>
        <div style="margin: 10px">
          <label for="data of birth">age</label>
          <br />
          <input style="width: 100%" type="number" name="age" />
        </div>
        <div style="margin: 10px">
          <label for="gender">gender </label>
          &nbsp;
          <input type="radio" name="gender" value="male" />&nbsp;
          <label for="gender">male</label>
          <input type="radio" name="gender" value="female" />&nbsp;
          <label for="gender">female</label>
        </div>
        <div style="margin: 10px">
          <label for="email">email</label>
          <br />
          <input
            style="width: 100%"
            type="email"
            name="email"
            placeholder="abc@gmail.com"
          />
        </div>
        <div style="margin: 10px">
          <label for="data of birth">date of joining</label>
          <br />
          <input style="width: 100%" type="date" name="join" />
        </div>
        <div style="margin: 10px">
          <label for="phone_no.">phone_no.</label>
          <br />
          <input
            style="width: 100%"
            type="number"
            name="phone"
            placeholder="+91 1234567890"
          />
        </div>
        <div style="margin: 10px">
          <input type="checkbox" name="clicked" value="true" />
          <label for="">&nbsp;<b>I agree to Terms and Conditions.</b></label>
        </div>
        <div style="margin: 10px">
          <input style="width: 100%" type="submit" name="submit"/>
        </div>
      </form>
    </main>    
</body>
</html>