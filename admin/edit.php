<?php  
session_start();
require_once("includes/header.php");
require_once("includes/config.php");
$id=$_GET["id"];
$_SESSION["id"]=$id;
?>



<div class="container-fluid mt-5">
    <div class="card">

        <div class="card-header">
        <h4>
           Edit Category
            <a href="view-category.php" class="btn btn-danger float-end">Back</a>
        </h4>
        </div>
        <div class="card-body">
            <?php
        $query="select * from category where category_id=$id";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <form action="update.php"  method="POST" id="myform">
        <div class="row">
         <div class="col md-6 mb-3">
             <label for="">category name</label>
             <input type="text" name="category-name" class="form-control" value=<?php echo $row['category_name'];?> >

         </div>
      
       </div>
       <button type="submit"  name="category" id="category" class="btn btn-success">Edit </button>
       </form>
      <?php
    }
}

?>
        
        

    </div>
</div>

<?php 
     require_once("includes/footer.php");
     require_once("includes/script.php");

?>
