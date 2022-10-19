<?php
session_start();
require_once("includes/config.php");
$id=$_SESSION["id"];


if(isset($_POST['category'])){
$category_name=$_POST['category-name'];
$query="update category set category_name='$category_name' where category_id=$id";
$result=mysqli_query($con,$query);
if($result){
    $_SESSION["status"]="updated sucesfully";
    header("location:view-category.php");
}
}

















?>