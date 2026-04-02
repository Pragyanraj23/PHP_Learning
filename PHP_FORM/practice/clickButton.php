<!DOCTYPE html>
<html lang="en">
<head>

    <title>Practice_1</title>
</head>
<body>
    <form method="post" action="">
    <button name =button type=submit>Click here</button>
</form>
</body>
</html>

<?php
function button_click(){
    echo "This is practice session.";
}

if(isset($_POST['button'])){
    button_click();

}

?>