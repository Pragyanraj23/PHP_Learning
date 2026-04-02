<?php
setcookie("fruit","apple",time()+(86400));

setcookie("color","red",time()+(86400));
//print_r($_COOKIE);
if(isset($_COOKIE['fruit'])){
    echo "Current fruit is ".$_COOKIE['fruit'];
}else{
    echo "No Fruit Set";
}

echo"<br>";
if(isset($_COOKIE['color'])){
    echo "Current color is ".$_COOKIE['color'];
}else{
    echo "No Color Set";
}
?>