<form action="" method="post">
    <input type="text" name="user"  placeholder="enter the name"/>
    <br/>
    <br/>
    <button name="button" value="set">Set Cookie</button>
      <br/>
    <br/>
    <button name="button" value="display">Display Cookie</button>
      <br/>
    <br/>
    <button name="button" value="delete">Delete Cookie</button>


</form>

<?php

if(isset($_POST['button'])){
if($_POST['button']=="set"){
    $val=$_POST['user'];
    echo "Cookie set";
    setcookie("user",$val);
}

if($_POST['button']=="display"){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}
if(($_POST['button']=="Delete")){
    if(isset($_COOKIE['user'])){
        setcookie('user',null,-1);
}

}
}


?>