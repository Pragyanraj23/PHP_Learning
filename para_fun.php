<?php
function sum($a,$b){
    echo $a+$b;
    echo "</br>";
}
sum(5,10);
sum(20,30);
sum(100,200);

function userdata($name,$color){
    echo "<h1 style='color:$color'>$name</h1>";
}
userdata("John Doe","blue");
userdata("Jane Smith","red");
userdata("Alice","green");

?>