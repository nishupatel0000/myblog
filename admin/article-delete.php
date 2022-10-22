<?php 
session_start();
require_once("includes/config.php");
$id=$_GET['id'];
$image="select * from article where article_id='$id'";
$myresult=mysqli_query($con,$image);
$row=mysqli_fetch_assoc($myresult);
$delete="delete  from article where article_id='$id'";
$result=mysqli_query($con,$delete);
if($result){
    if(file_exists('uploads/'.$row['photo'])){
        unlink('uploads/'.$row['photo']);
    }
    $_SESSION["status"]="Article Deleted Sucesfully";
    header('location:view-article.php');
}

?>