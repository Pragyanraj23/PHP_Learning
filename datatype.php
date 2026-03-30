<?php 
$name="Anil";
echo "$name";
echo "</br>";
echo var_dump("$name");

//integer
$a=10;
echo $a;
echo "</br>";
echo var_dump($a);  
echo "</br>";

//float
$b=10.5;
echo $b;
echo "</br>";
echo var_dump($b);

//boolean
$c=true;
echo $c;
echo "</br>";
echo var_dump($c);
echo "</br>";       

//null
$d=null;
echo $d;
echo "</br>";
echo var_dump($d);
echo "</br>";

//array
$arr=["Anil","Tim","John"];
echo $arr[0];
echo "</br>";
echo var_dump($arr);
echo "</br>";



//user= new class

$connection=ftp_connect("127.0.0.1") or die("Could not connect to server");
echo "Connection successful";
echo "</br>";
echo var_dump($connection);
?>