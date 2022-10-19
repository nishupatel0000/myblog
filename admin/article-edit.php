<?php 
session_start();
require_once("includes/config.php");
$id=$_POST['post_id'];
$category_id=$_POST['category_id'];
$articlename=$_POST['article-name'];
$description=$_POST['description'];
$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
// die();
$old_image=$_POST['old_image'];
$updateimage="";
if($photo!=null){
$filename=move_uploaded_file($tmp,'uploads/'.$photo);
echo $filename;
die();
    $updateimage=$filename;
}
else{
    $updateimage=$old_image;
}
    // move_uploaded_file($tmp,'uploads/'.$photo);
         
    // $image_extenstion=pathinfo($photo,PATHINFO_EXTENSION);
    // $filename=time().'.'.$image_extenstion;
    // $updateimage=$filename;



$status=isset($_POST['status'])==true?'1':'0';
$update="update article set category_id='$category_id',article_name='$articlename',description='$description',photo='$updateimage',status='$status' where article_id='$id'";
$query=mysqli_query($con,$update);
if($query){
    header('location:view-article.php');  
}


?>