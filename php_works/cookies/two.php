<?php

if(isset($_COOKIE["myname"])){
    echo $_COOKIE["myname"];
}else{
    echo "cookies not set";
}




?>


<input type="text" value="<?php

if(isset($_COOKIE["myname"])){
    echo $_COOKIE["myname"];
}else{
    echo "cookies not set";
}




?>">