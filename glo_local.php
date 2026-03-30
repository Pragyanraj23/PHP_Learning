<?php


     $name="Anil";
     function getname(){
        //$name="peter";

        global $name; //to access global variable in function
        echo "Local var: $name";
        $name="peter"; //it will change the global variable value
        echo "$name";
     }2
    // echo $name;

echo $name; //error because of local variable
echo "<br>";

echo getname();
echo "<br>";
// echo $name; //error because of local variable




?>