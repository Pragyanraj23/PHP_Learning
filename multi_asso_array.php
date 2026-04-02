<?php
$users=[
    ["name"=>"Pragyan","age"=>21,"city"=>"Noida","email"=>"pragyan@gmail.com"],
    ["name"=>"Anil","age"=>22,"city"=>"Lucknow","email"=>"anil@gmail.com"],
    ["name"=>"Satyarth","age"=>20,"city"=>"Delhi","email"=>"satyarth@gmail.com"],
    ["name"=>"Anshul","age"=>23,"city"=>"Mumbai","email"=>"anshul@gmail.com"]
];

foreach($users as $user){
    foreach($user as $key=> $item){
        echo $key.": ".$item."<br>";
    }

    echo "<br>";

}

// //for Table create it 
// echo "<table border='1'>";
// foreach($users as $user){
//     foreach($user as $key=> $item){
//         echo $key..$item."";
//     }


    
}
?>