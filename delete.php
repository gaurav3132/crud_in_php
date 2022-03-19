<?php
$db=new mysqli('localhost','root','','test');
$id=$_GET['id'];

$sql="delete from employee where id='$id'";
if($db->query($sql)){
    header("location:index.php");
}

?>