<?php
function fruitname($name,$color="red"){
    echo "The name of the fruit is: ".$name." and its color is: ".$color."<br>";
}
fruitname("Apple","green");

echo"</br>";
function userinfo($name,$color="Orange"){
    echo "<h1 style='color:$color'>$name</h1>";
    echo "</br>";
}
userinfo("John Doe","blue");
userinfo("Jane Smith","red");
userinfo("Alice");//taking default value of color as orange


?>