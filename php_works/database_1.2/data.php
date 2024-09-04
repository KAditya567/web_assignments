
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>input_data</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .box {
      width: 100%;
      height: 100vh;
      background: url("https://images.unsplash.com/photo-1508615039623-a25605d2b022?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D")
        no-repeat;
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      
    }

    .first {
      text-transform: capitalize;
      box-shadow: 0px 0px 30px gray;
      padding: 40px;
    }

    h1 {
      display: inline-block;
      margin-bottom: 15px;
    }

    label {
      margin: 10px 0px;
    }

    input {
      outline: none;
      padding: 5px 10px;
    }

    select {
      padding: 5px 10px;
      outline: none;
    }

    option {
      margin: 5px 10px;
    }

    .output {
      width: 35%;
      height: 85vh;
      padding: 40px;
      box-shadow: 0px 0px 30px gray;
    }
    
    p {
      width: 100%;
      height: 40px;
      text-align: center;
      border: 1px solid black;
      font-size: x-large;
      font-weight: bold;
      padding: 5px 0px;
      margin: 24px 0px;
      background-color: white;
    }
    input[type=checkbox] {
	       cursor: pointer;
    }
  </style>
  <body>
    <div class="box">
      <form
        name="register-form"
        action=""
        method="post"
        enctype="multipart/form-data"
        class="first"
      >
        <div>
          <h1>registration form</h1>
          <!-- <p>p tag m show krna h</p> -->
          <?php
  if (isset($_POST["submit"])) {
    $fname = $_POST["first"];
    $lname = $_POST["last"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $join = $_POST["join"];
    $phone = $_POST["phone"];
    $users = mysqli_connect("localhost", "root", "", "userdata");
     //  server name,  server's user id, server's password, database'name  
                   // information = table's name
    $data = "insert into information(firstname, lastname, age, gender, email, date_of_joining, 
    phone)values('$fname', '$lname',$age, '$gender', '$email', '$join', $phone)";
    mysqli_query($users, $data);
    // p tag m show krna h variables ke through
    echo "<p>Done</p>";
 }
?>
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
      <div class="output">
        <div>
          <h1>Output</h1>
          &nbsp;
          &nbsp;
          &nbsp;
          <form action="" method="post" style="display: inline;">
            <input type="text" placeholder="Enter first name" name="getname">
            <input type="submit" name="called">
          </form>
        </div>
        <?php
        if (isset($_POST["called"])) {
           $getname = $_POST["getname"];
           $users = mysqli_connect("localhost", "root", "", "userdata");
           $query = "select * from information where firstname = '$getname'";
          //  first name and lastname dono add krne hue to
           $result = mysqli_query($users, $query);
           while ($row = mysqli_fetch_array($result)) {
              echo "<p>$row[firstname]&nbsp;$row[lastname]</p>";
              echo "<p>$row[age]</p>";  
              echo "<p>$row[gender]</p>";  
              echo "<p>$row[email]</p>";  
              echo "<p>$row[date_of_joining]</p>";  
              echo "<p>$row[phone]</p>";
            }
        }
        ?>
      </div>
    </div>
    <div class="box">
      <form action="" method="post" class="first">
        <h1>Delete Data</h1>
        <br>
        <input type="text" name="txt" placeholder="Enter first name">
        <input type="submit" value="Delete" name="del">
        <?php
        if (isset($_POST["del"])) {
          $txt = $_POST["txt"];
          $users = mysqli_connect("localhost", "root", "", "userdata");
          $remove = "delete from information where firstname = '$txt'";
          if (mysqli_query($users, $remove)) {
            echo "<p>Data will be removed</p>";
          }else {
            echo "naah!";
            // agr database m name hi nahi or input m name type kr rhe h fir bhi data will be removed aa rha h 
          }

        }
        ?>

      </form>
      <form action="" method="post" class="first">
      <h1>Update Data</h1>
        <br>
        <input type="text" name="oldtxt" placeholder="Enter first name">
        <input type="text" name="updatetxt" placeholder="Enter updated name"><br>
        <input type="submit" value="Update" name="update" style="width:100%; margin-top: 10px;">

        <?php
        if (isset($_POST["update"])) {
          $oldtxt = $_POST["oldtxt"];
          $updatetxt = $_POST["updatetxt"];
          $users = mysqli_connect("localhost", "root", "", "userdata");
          $changed = "update information set firstname = ('$oldtxt') where firstname = ('$updatetxt')" ;
          if (mysqli_query($users, $changed)) {
            echo "<p>Name will be Updated</p>";
          }else {
            echo "Noi";
            // agr database m name hi nahi or input m name type kr rhe h fir bhi data will be removed aa rha h ?
          }

        }

        ?>

      </form>
    </div>
  </body>
</html>

