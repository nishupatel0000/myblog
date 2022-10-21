<?php
session_start();
require_once("includes/header.php");
require_once("includes/config.php");


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
        view Category
        <a href="add-category.php" class="btn btn-primary float-end">Add category</a>
      </h4>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">categoryname</th>
            <th scope="col">slug</th>
            <th scope="col">Action</th>



          </tr>
        </thead>
        <tbody>
          <?php
          $query = "select * from category";
          $result = mysqli_query($con, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>


                <td><?php echo $row['category_name']; ?></td>
                <td><?php echo $row['slug']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['category_id']; ?>"><button class="btn btn-success">Edit</button></a>
                  <a href="delete.php?id=<?php echo $row['category_id']; ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button></a>
                </td>


              </tr>

          <?php

            }
          }
          ?>


    </div>
  </div>
  </tbody>
  </table>

  <?php
  require_once("includes/footer.php");
  require_once("includes/script.php");

  ?>