<?php
require_once("includes/config.php");
?>
<style>
  .navbar {
    padding:0x;
  }
  .nav-link{
    border-right: 1px solid #fff;
    padding:8px 20px !important;
  }
</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->

    <img src="assets/img/S2.png" height="70" alt="s2soft" style="margin-top: -5px;" />
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
      <!-- Left links -->


      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid ">
    <a class="navbar-brand d-block  d-sm-none d-md-none" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <?php
        $select = "select * from category";
        $result = mysqli_query($con, $select);
        if (mysqli_num_rows($result) > 0) {
          foreach ($result as $row) {
        ?>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href=""><?php echo $row['category_name'];?></a>
            </li>

        <?php
          }
        }

        ?>
        </li>
      </ul>
    </div>
  </div>

</nav>