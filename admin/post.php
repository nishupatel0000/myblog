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

                    $slug = "select * from article where article_name='" . mysqli_real_escape_string($con, $title) . "' limit 1";
                    $myresult = mysqli_query($con, $slug);
                    if (mysqli_num_rows($myresult) > 0) {
                        while ($row = mysqli_fetch_assoc($myresult)) {
                ?>
                            <div class="card  shadow-sm mb-4">
                                <div class="card-header">
                                    <h5><?php echo $row['article_name'] ?></h5>
                                </div>
                                <div class="card-body">
                                    <label for="" class="text-dark me-2">Posted on: <?php echo date('d-M-Y', strtotime($row['date'])) ?></label>
                                </div>
                                <hr/>
                                <img src="uploads/<?php echo $row['photo'];?>" width="350px" align="center" alt="">
                                <div>
                                    <?php echo $row['description'];
                                    ?>
                                </div>

                            </div>
                        <?php
                        }
                    } else {
                        echo "No such found";
                    }
                } else {
                    echo "not found";
                }


                ?>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Advertise Area</h4>
                    </div>
                    <div class="card-body">
                        your advertise
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