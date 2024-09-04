<?php
$xml=simplexml_load_file("data.xml") or die("file not found");
//echo "<pre>";
//print_r($xml);
//echo "</pre>";

// echo $xml->student[1]->name;
// echo $xml->student[1]->age;

foreach($xml as $a){
    echo $a->name."<br>";
}




?>