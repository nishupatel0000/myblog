<?php
session_start();
require_once("includes/config.php");
if(isset($_POST["article"])){
  $category_id=$_POST['category_id'];
  // echo $category_id;
  $article_name=$_POST['article-name'];
  $description=$_POST['description'];
  $photo=$_FILES['photo']['name'];
  $tmpname=$_FILES['photo']['tmp_name'];
  $status=isset($_POST['status'])== true ? '1':'0';
 
move_uploaded_file($tmpname,'uploads/'.$photo);
$query="insert into article(category_id,article_name,description,photo,status)values('$category_id','$article_name','$description','$photo','$status')";
$result=mysqli_query($con,$query);
if($result){
  $_SESSION["status"]="article added sucesfully";
  header("location:add-article.php");
}


}
?>