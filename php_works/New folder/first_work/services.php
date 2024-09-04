<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>services</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body>
    <?php
    include("header.php");
    ?>
    <main>
      <div class="photo" style="background:url('https://source.unsplash.com/random/?services/')no-repeat; background-size: cover;">
        <div
          style="
            display: inline-block;
            margin: 250px 0px;
            padding: 10px;
            width: 750px;
          "
        >
          <h1>Services</h1>
          <p>
            Nature is a British weekly scientific journal founded and based in
            London, England. As a multidisciplinary publication, Nature features
            peer-reviewed research from a variety of academic disciplines,
            mainly in science and technology
          </p>
        </div>
      </div>
      <div class="content">
        <h1 style="margin-bottom: 10px">Services</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis rem
          harum fugiat dolor illo corrupti odit eveniet sit vitae molestias
          sequi voluptatum repudiandae perferendis maxime culpa nulla id quasi
          sunt, ex deleniti vero doloremque? Sequi at earum libero.
        </p>
      </div>
      <div class="arr">
        <?php
        //index arrays types
        $arr = array("anjali", "neha", "animesh", "ayushi", "sushant", "kunal", "tisha");

        // print_r($arr);   for normal print


        // for each loop 
        foreach ($arr as $i){
          echo ($i)."<br>";

        }

        // associate array with numbers
        $students = array(0=>"anjali",1=>"neha",2=>"animesh", 3=>"ayushi",  4=>"sushant", 5=>"kunal", 6=>"tisha");
         foreach($students as $i=> $a){
          echo "$i-$a<br>";
         }

         // associate array with names
         $employee = array ("name" => "shristi", "age" => 22, "id" => 1822060, "salery" => 25000);

         echo $employee["name"];
        //  echo $employee["age"];

        // for each loop 
        
         




        ?>

      </div>
    </main>
    <?php
    include("footer.php");
    ?>

    
  </body>
</html>
