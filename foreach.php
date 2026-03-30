<?php
 $user=array("Anil","Pragyan","Satya","Anshu","Sam","Bhaskar");
 
 foreach($user as $stu){

    echo "<h3>$stu</h3>";
    echo "<br>";

    if($stu=="Satya"){
        break;
    }
//second way to write foreach loop
    foreach($user  as $x):
        echo $x;
        echo "<br>";
        endforeach;
 }

 
?>