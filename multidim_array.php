<?php
$user=[
  [1,"Pragyan","Noida","pragyan@gmail.com"],
  [2,"Anil","Lucknow","anil@gmail.com"],
  [3,"Satyarth","Delhi","satyarth@gmail.com"],
  [4,"Anshul","Mumbai","anshul@gmail.com"]
];

//echo "<pre>";
//print_r($user);
//echo "<pre>";

for($i=0;$i<count($user);$i++){
   //  print_r($user[$i]);
    for($j=0;$j<count($user[$i]);$j++){
        echo  $user[$i][$j];
        echo "<br>";
    }
}


?>