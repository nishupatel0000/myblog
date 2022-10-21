<?php
session_start();
require_once("includes/config.php");
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
                Edit Article
                <a href="view-article.php" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            <?php

            $id = $_GET['id'];
            $query1 = "select * from article where article_id='$id'";
            $myresult = mysqli_query($con, $query1);
            if (mysqli_num_rows($myresult) > 0) {
                foreach ($myresult as $post) {

            ?>
                    <form action="article-edit.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="post_id" value="<?php echo $post['article_id']; ?>">
                        <div class="row">
                            <div class="col md-12 mb-3">
                                <label for="">Category List</label>
                                <?php
                                $query = "select * from category";
                                $result = mysqli_query($con, $query);
                                if (mysqli_num_rows($result) > 0) {
                                ?>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">----select category----</option>

                                        <?php
                                        foreach ($result as $row) {
                                        ?>

                                            <option value="<?php echo $row['category_id']; ?>"<?php echo $row['category_id'] == $post['category_id']? 'selected':''?>><?php echo $row['category_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                <?php
                                } else {
                                ?>
                                    <h5>no category Available</h5>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col md-7 mb-3">
                                <label for="">Article name</label>
                                <input type="text" name="article-name" value="<?php echo $post['article_name'];?>" class="form-control">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col md-6 mb-3">
                                <label for="">Description</label>
                                <textarea name="description" cols="30" rows="10" id="summer" class="form-control"><?php echo htmlentities($post['description']);?></textarea>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col md-6 mb-3">
                                <label for="">photo</label>
                                <input type="file" name="photo" id=""  class="form-control">
                        <input type="hidden" name="old_image" value="<?php echo $post['photo']; ?>">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col md-6 mb-3">
                                <label for="">status</label>
                                <input type="checkbox" name="status" id="" <?php echo $post['status'] == '1'? 'checked':''?>>
                            </div>
                        </div>


                        <button type="submit" name="article_edit" id="article" class="btn btn-success">Edit Article </button>
                    </form>
                <?php
                }
            } else {
                ?>
                <h4>no record found</h4>
            <?php
            }
            ?>


        </div>
    </div>

    <?php
    require_once("includes/footer.php");
    require_once("includes/script.php");
    ?>