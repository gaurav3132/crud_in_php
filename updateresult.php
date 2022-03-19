<?php
$db=new mysqli('localhost','root','','test');
$id=$_GET['id'];


$name=$_POST['name'];
$department=$_POST['department'];
$phonenumber=$_POST['phonenumber'];

$sql="update employee set name='$name', department='$department', phonenumber='$phonenumber' where id='$id'";
if($db->query($sql)){
    header("location:index.php");
}

?>