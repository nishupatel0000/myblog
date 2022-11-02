<?php
require_once("includes/config.php");
require_once("includes/header.php");
?>
 <div class="container-fluid px-4"> 
                        <h1 class="mt-4">Admin panel for Blogging</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Categories
                                    <?php 
                                          $query = "select * from category";
                                          $result = mysqli_query($con, $query);
                                          if ($row=mysqli_num_rows($result)) {
                                            echo '<h4 class="mb-0"> '.$row.'   </h4>';
                                          }
                                          else{
                                            echo "not found";
                                          }
                                        ?>
                                    </div>

                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="viewdata.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Post
                                        <?php 
                                          $article_query = "select * from article";
                                          $myresult = mysqli_query($con, $article_query);
                                          if ($total=mysqli_num_rows($myresult)) {
                                            echo '<h4 class="mb-0"> '.$total.'   </h4>';
                                          }
                                          else{
                                            echo "not found";
                                          }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="viewdata.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       
                     
                    </div>
  <?php 
  require_once("includes/footer.php");
  require_once("includes/script.php");

?>
