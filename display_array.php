<?php
$user=[
    [1,"Pragyan","Noida","pragyan@gmail.com"],
    [2,"Anil","Lucknow","anil@gmail.com"],
    [3,"Satyarth","Delhi","satyarth@gmail.com"],
    [4,"Anshul","Mumbai","anshul@gmail.com"]

];

echo "table of user details";
echo "<br>";
echo "<table border=1>";
for($i=0;$i<count($user);$i++){
    echo "<tr>";
    for($j=0;$j<count($user[$i]);$j++){
        echo "<td>";
        echo $user[$i][$j];
        echo "</td?>";
    }
    echo "</tr>";
}
echo "</table>";
?>