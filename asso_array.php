<?php
$userDetails=array(
    "username"=>"Pragyan",
    "age"=>21,
"city"=>"Lucknow",
"email"=>"pragyan@example.com",
"state"=>"Uttar  Pradesh"
);

foreach($userDetails as $key=> $data){
echo  $key.": ". $data."<br>";
}
//second way to write foreach loop
// foreach($userDetails as $key=> $data):
//   echo $key.": ".$data ."<br>";
// endforeach;
?>