<?php
include("includes/config.php");
session_start();
$id=$_GET['id'];
$query="delete from category where category_id=$id";
$result=mysqli_query($con,$query);
if($result){
    $_SESSION["status"]="Deleted sucessfully";
  header("location:view-category.php");
}
?>