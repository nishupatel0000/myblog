<?php
session_start();
require_once("includes/config.php");
require_once("includes/header.php");
require_once("includes/navbar.php");

?>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if (isset($_GET['title'])) {
                    $title = $_GET['title'];

                    $slug = "select * from category where slug='" . mysqli_real_escape_string($con, $title) . "' limit 1";
                    $myresult = mysqli_query($con, $slug);
                    if (mysqli_num_rows($myresult) > 0) {
                        while ($row = mysqli_fetch_assoc($myresult)) {
                            $id = $row['category_id'];
                            $mypost = "select category_id,article_id,article_name,description,date from article where category_id='$id' AND status='1'";
                            $query = mysqli_query($con, $mypost);
                            if (mysqli_num_rows($query) > 0) {
                                foreach ($query as $record) {
                ?>
                                    <a href="post.php?title=<?php echo $record['article_name'] ?>" class="text-decoration-none">
                                        <div class="card card-body shadow-sm mb-4">
                                            <h5><?php echo $record['article_name'] ?></h5>
                                            <div>
                                                <label for="" class="text-dark me-2">Posted on: <?php echo date('d-M-Y', strtotime($record['date'])) ?></label>
                                            </div>
                                        </div>

                                    </a>
                <?php
                                }
                            } else {
                                echo  '<div class="card card-body shadow-sm mb-4">
                               <h2> No Post Available</h2>    
                               </div>';
                            }
                        }
                    } else {
                        echo  '<div class="card card-body shadow-sm mb-4">
                               <h2> No Post </h2>    
                               </div>';
                    }
                } else {
                    echo '<h2> No Post </h2>';
                }


                ?>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Advertise Area</h4>
                    </div>
                    <div class="card-body">

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