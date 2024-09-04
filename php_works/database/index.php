<?php
$students = mysqli_connect("localhost","root","","students_data");
                            // server's name, server's user id - by default is root, server's password, database name  
$data = "insert into attendence_details(name, age, kya_karte_ho, kitna_kamate_ho, kha_se_ho)values('tisha', 18, 'ghumti rhti hu', 'bahut', 'pagal khane se')";

     
if (mysqli_query($students, $data)) {
    echo "ok report";
    }


   
?>