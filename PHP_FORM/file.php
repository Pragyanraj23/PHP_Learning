<?php
// echo "<pre>";
//  print_r($_FILES);
// echo "</pre>";


if($_FILES['fileUpload']){
$path=$_FILES['fileUpload']['name'];
$upload_path="./upload/". $path;
// echo $upload_path;

move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path) ||
 die("File not uploaded");
 echo "File uploaded successfully";
}else{
    die("File not uploaded");
}
?>