
<form action="" method="POST">
    <input type='text' name='name' placeholder="Enter the name">
    <br/>
    <br/>
    <input type='text' name='course' placeholder="Enter the course">
    <br/>
    <br/>
    <input type='text' name='batch' placeholder="Enter the batch">
    <br/>
    <br/>
    <input type='text' name='city' placeholder="Enter the city">
    <br/>
    <br/>
    <input type='text' name='year' placeholder="Enter the year">
    <br/>
    <br/>
    <button type='submit' name='btn'>Add new Student</button>



</form>





<?php

if(isset($_POST['name'])){
     $name=$_POST['name'];
    $course=$_POST['course'];
     $batch=$_POST['batch'];
      $city=$_POST['city'];
       $year=$_POST['year'];
    include("./config.php");

    

$student=$conn->prepare("
INSERT INTO  `students`(`id`,`name`,`course`,`batch`,`city`,`year`) VALUES
 (NULL,'$name','$course','$batch','$city','$year')
");
$result=$student->execute();
if($result){
    echo "Data Inserted";
}else{
    echo "Operation failed";
}

}


?>