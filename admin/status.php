<?php
require_once("includes/config.php");
$id=$_GET['id'];
$status=$_GET['status'];

$update="update article set status='$status' where article_id='$id'";
$result=mysqli_query($con,$update);
if($result){
    header('location:view-article.php');
}










?>