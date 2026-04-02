<?php
include("./config.php");

// echo "update file";

// echo $_GET['id'];

if(isset($_GET['id'])){
    echo $id=$_GET['id'];
    $getStudent=$conn->prepare("SELECT * FROM students where id='$id'");
    $getStudent->execute();
    $student=$getStudent->fetchAll();
    
    $name=$student[0]['name'];
    $course=$student[0]['course'];
    $batch=$student[0]['batch'];
    $city=$student[0]['city'];
    $year=$student[0]['year'];
    

}

?>
<form action="" method="post">
    <input type="text" value="<?php echo $name ?>" name="name"/>
    <br/><br/>
    <input type="text" value="<?php echo $course?>" name="course"/>
    <br/><br/>
    <input type="text" value="<?php echo $batch ?>" name="batch"/>
    <br/><br/>
    <input type="text" value="<?php echo $city ?>" name="city"/>
    <br/><br/>
    <input type="text" value="<?php echo $year ?>" name="yaer"/>
    <br/><br/>
    <button value="<?php echo $id;?>" name="update" >Update student data</button>
    


</form>