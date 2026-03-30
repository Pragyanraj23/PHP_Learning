<?php

$user=["Anil","Pragyan","Satyarth","Anshul","Bhaskar"];

//add element in array
array_push($user,"Sam");
print_r($user);
echo "<br>";
array_pop($user);
print_r($user);
echo "<br>";
array_splice($user,2);
print_r($user);


?>