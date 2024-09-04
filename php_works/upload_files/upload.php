<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload_files</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .box{
            width: 100%;
            height: 100vh;
            background-color: black;
            color: white;
            display:flex;
            justify-content: center;
            align-items: center;
            
        }
        .inpt{
            background-color: white;
            color: black;
            padding: 5px 10px;
        }
        .btn{
            padding: 5px 10px;
            background-color: #FF681F;
        }
        form{
            text-align: center;
            border: 1px solid white;
            padding: 50px;
        }
    </style>
</head>
<body> 
    <div class="box">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="Choose any file">Choose any file -</label>
            <br>
            <br>
            <input type="file" name="upload" class="inpt">
            <br>
            <br>
            <input type="submit" name="submit" class="btn">
            <br>
            <br>
            <div>
            <?php
    if(isset($_POST["submit"])){
        // echo "clicked";

    // all things print 

        // echo "<pre>";
        // print_r($_FILES["upload"]);
        // echo "</pre>";
        
    // if print only one things 

        // echo $_FILES["upload"]["full_path"];

     // or 

        $name = $_FILES["upload"]["name"];
        // echo $name;
    

    // .$name kyu aayega ?     
        $uplod = "data/".$name;
        $locate = $_FILES["upload"]["tmp_name"];
        if (move_uploaded_file($locate, $uplod)) {
    // for checking    
            // echo "sucess";
            
            if ($_FILES["upload"]["size"]<300000) {
                echo "Upload ho gyi yeahhh...";
            }else {
                echo "Bdi file h bro...";
            }
        }
    }
    ?>
            </div>
        </form>
        <div>
            <!-- <img src="" alt="img"> -->
        </div>
    </div>
    <div>

    
</body>
</html>