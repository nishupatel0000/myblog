
<?php
session_start();
include("includes/config.php");


if(isset($_POST['category'])){
   $category=$_POST['category-name'];
   $slug=$_POST['slug'];
  
    $query="insert into category(category_id,category_name,slug)values('','$category','$slug')";
   
    $result=mysqli_query($con,$query);
    
    if($result){

      $_SESSION["status"]="category added sucesfully";
       header("location:view-category.php");
    }
    else{
       echo "error";
    }
   
}

?>
