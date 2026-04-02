<?php
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students=$getStudents->fetchAll();
echo "<pre>";
// print_r($students);

echo  "<table border='1'>";
echo "<tr>
        <th>Name</th>
        <th>Couse</th>
        <th>Batch</th>
        <th>Year</th>
        <th>City</th>
        </tr>";
foreach($students as $student){
    

    echo "<tr> 
    
    <td>".$student['name'] ."</td>
    <td>".$student['course']."</td>
    <td>".$student['batch']."</td>
    <td>".$student['year']."</td>
    <td>".$student['city']."</td>


    </tr>";
    echo "<br>";

    
}

?>