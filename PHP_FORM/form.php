<?php
// print_r($_POST);
// echo  "<br/>"

if(isset($_POST['username'])){
    echo "User name is ".$_POST['name'];
    echo "</br>";
       echo "User password is ".$_POST['password'];
    echo "</br>";
       echo "User email is ".$_POST['email'];
    echo "</br>";
       echo "User skiils is ".implode(',',$_POST['skills']);
    echo "</br>";
         echo "User gender is ". $_POST['gender'];
    echo "</br>";
         echo "User city is ". $_POST['city'];
    echo "</br>";
         echo "User bio is ". $_POST['bio'];
    echo "</br>";
    
}

?>