<?php
//Array to Json
//$user=["name"=>"pragyan","age"=>25,"email"=>"pragyan@gmail.com"];

//$userJson=json_encode($user);
//echo $userJson;

//print_r($user);

//  Json to Araray
$data='{"name":"anil","age":30,"email":"anil@gmail.com"}';
$dataArray=json_decode($data,true);
print_r($dataArray);


?>