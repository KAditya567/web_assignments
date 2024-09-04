<?php

$conn=mysqli_connect("localhost","root","","Students");
// server's name, server's user id - by default is root, server's password, database name 
$query="insert into students_table(Name,Age,Designation)values('ananya',22,'manager')";

if(mysqli_query($conn,$query)){
    echo"yo bro!";
};
?>