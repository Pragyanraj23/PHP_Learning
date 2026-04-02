<?php
 $user=array("Anil","Pragyan","Satyarth","Anshul");
//  echo $user[0];
//  echo "<br>";
    // echo $user[1];
    // echo "<br>";
    // echo $user[2];
    // echo "<br>";
    // echo $user[3];
    // echo "<br>";

 echo "<br>";

 $user2=["Kolkata","Delhi","Mumbai","Chennai"];
    // echo $user2[0];
    //  echo $user2[1];
    // echo "<br>";
    // echo $user2[2];
    // echo "<br>";
    // echo $user2[3];
    // echo "<br>";



    for($i=0;$i<count($user);$i++){
        echo "<h1 style=color:blue>$user[$i]</h1>";
        echo "<br>";
    }

    for($j=0;$j<count($user2);$j++){
        echo "<h1 style=color:red>$user2[$j]</h1>";
        echo "<br>";
    }

    echo count($user);
    echo "<br>";
    echo count($user2);

?>