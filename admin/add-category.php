<?php
session_start();
require_once("includes/header.php");
?>



<div class="container-fluid mt-5">
  <div class="card">
    <?php
    if (isset($_SESSION["status"])) {


    ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> <?php echo  $_SESSION["status"]; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php
    }
    unset($_SESSION["status"]);
    session_destroy();
    ?>

    <div class="card-header">
      <h4>
        Add Category
        <a href="view-category.php" class="btn btn-danger float-end">Back</a>
      </h4>
    </div>
    <div class="card-body">
      <form action="category-code.php" method="POST" id="myform">
        <div class="row">
          <div class="col md-6 mb-3">
            <label for="">category name</label>
            <input type="text" name="category-name" class="form-control">

          </div>
        </div>
        <div class="row">
          <div class="col md-6 mb-3">
            <label for="">slug</label>
            <input type="text" name="slug" class="form-control">

          </div>
        </div>

        <button type="submit" name="category" id="category" class="btn btn-success">Add </button>
      </form>


    </div>
  </div>

  <?php
  require_once("includes/footer.php");
  require_once("includes/script.php");

  ?>