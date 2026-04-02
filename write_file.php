<?php

if(isset($_POST['filename'])){
    $fileName="files/".$_POST['filename'];
    $content=$_POST['content'];
    $file=fopen($fileName,"w") or die ("Unable to create file");
    fwrite($file,$content);
    fclose($file);
    echo "File created successfully";
}
// $fileName="files/dummy.txt";
// $content="this is a dummy file created by php";
// $file=fopen($fileName,"w") or die ("Unable to create file");
// fwrite($file,$content);
// fclose($file);
// echo "File created successfully";

?>

<form action="" method="post">
    <input type="text" name="filename" placeholder="Enter file name"/>
    <br>
    <br>
    <textarea name="content" placeholder="Enter file content"></textarea>
    <br>
    <br>
    <button name="button" value="create">Create File</button> 
</form> 