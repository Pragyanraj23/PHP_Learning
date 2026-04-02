<?php
setcookie("fruit","apple",time()+(86400));
print_r($_COOKIE);
if(isset($_COOKIE['fruit'])){
    echo "Current Cookie is ".$_COOKIE['fruit']";
}else{
    echo "No Cookie Set";
}
?>