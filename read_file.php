<?php
// $file="files/abc.txt";
// $myFile=fopen($file,"r") or die("Unable to open file");
//     echo fread($myFile,filesize($file));
//     fclose($myFile);


if(isset($_FILES['file'])){
    // print_r($_FILES[file]);
    $file=$_FILES['file']['tmp_name'];
    $myFile=fopen($file,"r") or die("Unable to open file");
    echo fread($myFile,filesize($file));
    fclose($myFile);
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <br>
    <br>
    <button name="button" value="read">Read File</button>
</form>
