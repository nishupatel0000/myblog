<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>
<style>
 
</style>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Category</h3>
                <div class="underline"></div>
            </div>
            <?php
            $select = "select * from category ";
            $result = mysqli_query($con, $select);
            if (mysqli_num_rows($result) > 0) {
                foreach ($result as $row) {
            ?>
                    <div class="col-md-3 mb-4">
                        <a class="text-decoration-none" href="viewdata.php?title=<?php echo $row['slug']; ?>">
                            <div class="card card-body">
                                <?php echo $row['catergory_name']; ?>
                            </div>
                        </a>

                    </div>

            <?php
                }
            }

            ?>

        </div>
    </div>
</div>


<?php
require_once("includes/footer.php");
require_once("includes/script.php");

?>