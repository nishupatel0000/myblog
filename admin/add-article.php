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
                Add Article
                <a href="view-article.php" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">
            <form action="article-code.php" method="POST" enctype="multipart/form-data">
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

                                    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
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
                        <input type="text" name="article-name" class="form-control">

                    </div>
                </div>
                <div class="row">
                    <div class="col md-6 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>

                    </div>
                </div>
                <div class="row">
                    <div class="col md-6 mb-3">
                        <label for="">photo</label>
                        <input type="file" name="photo" id="" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col md-6 mb-3">
                        <label for="">status</label>
                        <input type="checkbox" name="status" id="">
                    </div>
                </div>


                <button type="submit" name="article" id="article" class="btn btn-success">Add </button>
            </form>


        </div>
    </div>

    <?php
    require_once("includes/footer.php");
    require_once("includes/script.php");
    ?>