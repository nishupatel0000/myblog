<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>
<style>
    .underline {
        height: 4px;
        width: 50px;
        background-color: red;
        margin-bottom: 20px;
    }
</style>


<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-white">Category</h3>
                <div class="underline">
                </div>
            </div>
            <?php
            $select = "select * from category";
            $result = mysqli_query($con, $select);
            if (mysqli_num_rows($result) > 0) {
                foreach ($result as $row) {
            ?>

                    <div class="col-md-3 mb-4">
                        <a class="text-decoration-none" aria-current="page" href="viewdata.php?title=<?php echo $row['slug']; ?>">
                            <div class="card card-body">
                                <?php echo $row['category_name']; ?>
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


<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">gamebloger</h3>
                <div class="underline">
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta culpa assumenda magnam doloribus? Distinctio minus dicta debitis consequatur. Nam blanditiis consequatur iure voluptas quos sed sint nulla nesciunt, mollitia amet!</p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark">Latest Post</h3>
                <div class="underline">
                </div>
                <?php
            $latest_select = "select * from article where status='1' order by article_id DESC LIMIT 5";
            $myresult = mysqli_query($con, $latest_select);
            if (mysqli_num_rows($myresult) > 0) {
                foreach ($myresult as $record) {
            ?>

                    <div class="col-md-12 mb-4">
                        <a class="text-decoration-none" aria-current="page" href="post.php?title=<?php echo $record['article_name']; ?>">
                            <div class="card card-body">
                                <?php echo $record['article_name']; ?>
                            </div>
                        </a>
                    </div>

            <?php
                }
            }

            ?>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Welcome.</h4>
                    </div>
                    <div class="card-body">
                        nishantpatel@gmail.com
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
<?php
require_once("includes/footer.php");
require_once("includes/script.php");

?>