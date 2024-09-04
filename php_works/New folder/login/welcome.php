<?php
session_start();
$getname= $_SESSION['sendname'];
$conn=mysqli_connect("localhost","root","","data");
$query="select* from data_table where username='$getname'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

//echo "$row[password]";


if($getname==true){

}else{
    header("location:login.php");
}




?>


<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">    
</head>
<div class="container-fluid bg-info py-3 d-flex" >
<div class="container text-start"> <?php echo"welcome $row[name]" ?></div>
<div class="container text-end"> <a href="logout.php" name="logout" method="post">log out</a></div>

</div>
<img src=<?php echo"$row[photo]" ?> width="300px" height="300px" class="mt-5 d-block m-auto">

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta veritatis sunt, dolores quo ex architecto tempore, dicta odio, saepe vero consectetur ad! Ab, aperiam quasi numquam commodi blanditiis repellendus! Asperiores alias, aliquam ab debitis esse delectus eius possimus sint maiores nisi nostrum aperiam recusandae, ducimus sapiente perspiciatis? Magnam harum culpa nostrum excepturi assumenda veniam adipisci amet asperiores dolorem tempore nihil commodi itaque, rem libero atque, ullam qui saepe, in dolor consequuntur eum expedita exercitationem perspiciatis ab! Numquam repudiandae fuga eligendi tenetur aspernatur magnam sapiente. Voluptatem minima quibusdam nulla necessitatibus ullam nisi beatae aliquam vitae similique, quod eligendi obcaecati odio iure recusandae eveniet sequi deserunt culpa dicta veritatis fugit excepturi quas quidem. Assumenda accusamus ipsum vel rem doloremque molestias aliquid. Quaerat repudiandae blanditiis ratione, facilis molestiae, explicabo aspernatur saepe exercitationem recusandae quo ex officia aperiam odio, necessitatibus sit. Et est autem qui libero! Aliquid, saepe itaque voluptate architecto tempore in minus alias commodi et aut mollitia libero facilis, veritatis nesciunt repellat eum corporis voluptatibus aspernatur excepturi temporibus ex fugit! Consequatur dolorem blanditiis voluptatibus deleniti commodi molestias eos reprehenderit praesentium, omnis doloremque hic nisi obcaecati excepturi voluptas neque. Eius quam asperiores cum consequuntur sed, doloremque nobis voluptatum facilis accusantium ipsum officiis ipsam, nam at quos? Possimus cupiditate nostrum magnam ducimus distinctio eligendi unde, obcaecati itaque aliquam alias neque porro sit beatae assumenda quisquam reprehenderit, tenetur quaerat facere commodi. Amet iusto a incidunt ducimus magni sapiente ab aspernatur. Vero quasi ad fugiat porro nostrum adipisci aperiam voluptas. Assumenda rem in error facilis eveniet necessitatibus explicabo ducimus odit inventore impedit repellat iure placeat iste ipsa, commodi numquam mollitia enim corporis illo asperiores? Deleniti aliquam, temporibus reiciendis libero at dolorum quam eaque modi doloribus? Perspiciatis nemo ipsum molestiae quisquam repellat dicta, laudantium, molestias dolores corrupti nulla saepe velit exercitationem sit nam facere tempora tenetur maiores.</p>





</html>