<?php
$db=new mysqli('localhost','root','','test');

$name=$_POST['name'];
$department=$_POST['department'];
$phonenumber=$_POST['phonenumber'];


$sql="insert into employee set name='$name', department='$department', phonenumber='$phonenumber' ";

if($db->query($sql)){
    header("location:index.php");
}
else{
    echo 'error while inserting data';
}


?>