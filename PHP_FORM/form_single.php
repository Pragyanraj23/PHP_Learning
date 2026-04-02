<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Handling  with  PHP</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="username" placeholder="Enter username"/>
        <br/>
        <br/>
        <input type="Password" name="password" placeholder="Enter Password"/>
        <br/>
        <br/>
        <input type="email" name="email" placeholder="Enter Email"/>
        <br/>
        <br/>
        <input type="checkbox" name="skills[]" value="php"><span>PHP</span> 
        <br/>
        <br/>
         <input type="checkbox" name="skills[]" value="java"><span>Java</span> 
        <br/>
        <br/>
         <input type="checkbox" name="skills[]" value="cpp"><span>CPP</span> 
        <br/>
        <br/>
         <input type="checkbox" name="skills[]" value="ph"><span>JavaScript</span> 
        <br/>
        <br/>
        <input type="radio" name="gender" value="male"><span>Male</span> 
        <br/>
        <br/>
         <input type="radio" name="gender" value="female"><span>Female</span> 
        <br/>
        <br/>
        <select name="city">
             <option>Select your City</option>
            <option value="noida">Noida</option>
             <option value="delhi">Delhi</option>
              <option value="gurgaon">Gurgaon</option>
        </select>
        <br/>
        <br/>
        <textarea name="bio"></textarea>
        </br>
        </br>
        <button>Sign Up</button>
</form>
        
    
</body>
</html>

<?php
// print_r($_POST);
// echo  "<br/>"

if(isset($_POST['username'])){
    echo "User name is ".$_POST['username'];
    echo "</br>";
       echo "User password is ".$_POST['password'];
    echo "</br>";
       echo "User email is ".$_POST['email'];
    echo "</br>";
       echo "User skiils is ".implode(',',$_POST['skills']);
    echo "</br>";
         echo "User gender is ". $_POST['gender'];
    echo "</br>";
         echo "User city is ". $_POST['city'];
    echo "</br>";
         echo "User bio is ". $_POST['bio'];
    echo "</br>";
    
}

?>