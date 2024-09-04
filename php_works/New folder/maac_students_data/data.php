<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
</head>
<body>
    <?php
    $xml=simplexml_load_file("students.xml") or die("file not foumd");
    ?>
    <div style="display: flex; align-items: center; justify-content: center; height: 90vh">

        <?php
        echo "<table border='2' cellspacing='0' cellpadding='10' style='text-align: center;'>";
        echo"<tr>";
        echo"<th colspan='6'>";
        echo "<h1>Student's Details</h1>";
        echo "</th>";

        echo"</tr>";
        foreach($xml as $i){
            echo "<tr>";
            echo "<td>";
            echo "<b>$i->one</b>";
            echo $i->naam;
            echo "</td>";
        
            echo "<td>";
            echo "<b>$i->two</b>";
            echo $i->id;
            echo "</td>";
        
            echo "<td>";
            echo "<b>$i->three</b>";
            echo $i->age;
            echo "</td>";
        
            echo "<td>";
            echo "<b>$i->four</b>";
            echo $i->kya_krte_ho;
            echo "</td>";
        
            echo "<td>";
            echo "<b>$i->five</b>";
            echo $i->kitna_kmate_ho;
            echo "</td>";
        
            echo "<td>";
            echo "<b>$i->six</b>";
            echo $i->kha_se_ho;
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    
    ?>
    </div>
</body>
</html>