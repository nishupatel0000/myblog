<?php
session_start();
require_once("includes/header.php");
require_once("includes/config.php");


?>




<div class="container-fluid mt-5">
    <div class="card">

        <div class="card-header">
            <h4>
                view article
                <a href="add-article.php" class="btn btn-primary float-end">Add Article</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Article-Name</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>status</th>
                            <th>date</th>
                            <th>Action</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "select a.*,c.category_name AS category_name from article a,category c where a.category_id=c.category_id";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            foreach ($result as $row) {
                        ?>
                                <tr>
                                    <td width="10px"><?php echo $row['article_id']; ?></td>
                                    <td width="120px"><?php echo $row['article_name']; ?></td>
                                    <td width="10px"><?php echo $row['category_name']; ?></td>
                                    <td width="800px"><?php echo $row['description']; ?></td>
                                    <td width="100px"><img src="uploads/<?php echo $row['photo']; ?>" width="150px" height="80px" alt=""></td>
                                    <td width="100px"><?php echo $row['status'] == '1' ? 'visible' : 'hidden'; ?></td>
                                    <td width=""><?php echo $row['date']; ?></td>
                                    <td><a href="edit-article.php?id=<?php echo $row['article_id']; ?>"><button class="btn btn-success">Edit</button></a>
                                        <a href="deletee.php?id=<?php echo $row['article_id']; ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button></a>
                                    </td>

                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4" align="center">no record found</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<?php
require_once("includes/footer.php");
  require_once("includes/script.php");
?>