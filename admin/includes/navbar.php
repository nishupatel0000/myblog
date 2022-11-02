<?php
require_once("includes/config.php");


?>
<style>
  .navbar {
    padding: 0x;
  }

  .nav-link {
    border-right: 1px solid #fff;
    padding: 8px 20px !important;
  }

  .button:link,
  .button:visited {
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    display: inline-block;
    border-radius: 100px;
    padding: 15px 40px;
    transition: all 0.2s;
  }

  .button-blue {
    position: absolute;
    background-color: #3232fd;
    color: #d1d1d1 !important;
    border-radius: 100px;
    padding: 15px 40px;
    right: 110px;
  }
  
  .button-blue1 {
    position: absolute;
    background-color:#1d811d;
    color: #d1d1d1 !important;
    border-radius: 52px;
    padding: 19px 27px;
   right: 30px;
  }

  .button:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  .button:active {
    transform: translateY(-1px);
  }

  .button::after {
    content: "";
    display: inline-block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    border-radius: 100px;
    z-index: -1;
    transition: all 0.4s;
  }

  .button-blue::after {
    background-color: cadetblue !important;
  }

  
  .button-blue1::after {
    background-color: cadetblue !important;
  }
  .button:hover::after {
    transform: scale(1.4, 1.6);
    opacity: 0;
  }

  @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap');

  .fas.fa-envelope {
    color: #fff;
    font-size: 2rem;
    background: #333;
    padding: 1rem;
    border-radius: 100%;
    margin: 0 0 1rem 0;
  }

  .card-content h1 {
    text-transform: uppercase;
    margin: 0 0 1rem 0;
  }

  .card-content p {
    font-size: .8rem;
    margin: 0 0 2rem 0;
  }

  .myinput {
    padding: .8rem 1rem;
    width: 100%;
    border-radius: 5rem;
    outline: none;
    border: .1rem solid #d1d1d1;
  }

  ::placeholder {
    color: black;
    font-size: large;
  }

  .subscribe-btn {
    padding: .8rem 2rem;
    border-radius: 5rem;
    color: #fff;
    font-size: .7rem;
    border: none;
    outline: none;
    cursor: pointer;
  }
  

</style>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->

    <img src="assets/img/S2.png" height="70" alt="s2soft" style="margin-top: -5px;" />


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
      <a target="_blank" class="button button-blue" data-toggle="modal" data-target="#exampleModalLong">Subscribe</a>


      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="container">
                <p id="message"></p>
                <h1>Subscribe</h1>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="wrapper">
                <form method="post" class="card-content" id="myform">

                  <div class="form-input">
                    <label for="email"></label>
                    <input type="email" class="myinput" name="email" id="email" placeholder="Your Email">
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success" name="submit" id="submit">Save</button>
            </div>
          </div>
        </div>
      </div>

      <a target="_blank" class="button button-blue1" data-toggle="modal" data-target="#example"><i class="fa fa-phone" aria-hidden="true"></i></a>


      <!-- Modal -->
      <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="container">
              <p id="result"></p>


                <h1>Get In Touch</h1>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="wrapper">
                <form method="post" class="card-content" id="contact">

                  <div class="form-input">
                    <label for="Name"></label>
                    <input type="text" class="myinput" name="name" id="Name" placeholder="Your Name" >
                    <label for="contact No"></label>
                    <input type="text" class="myinput" name="contactno" id="contact No" placeholder="Your contact-No">
                    <label for="reason"></label>
                    <input type="text" class="myinput" name="reson" id="reson" placeholder="Reason">
                    
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success" name="save" id="save">Save</button>
            </div>
          </div>
        </div>
      </div>
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <?php
        $select = "select * from category";
        $result = mysqli_query($con, $select);
        if (mysqli_num_rows($result) > 0) {
          foreach ($result as $row) {
        ?>
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="viewdata.php?title=<?php echo $row['slug']; ?>"><?php echo $row['category_name']; ?></a>
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
<?php
require_once("includes/script.php");



?>
<script>
  $('#submit').click(function() {
    var form = $('#myform')[0];
    var data = new FormData(form);
    $.ajax({
      type: "POST",
      url: "subscribe.php",
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      success: function(data) {
        $('#myform').trigger("reset");
        $("#message").html(data);
      },
      error: function(err) {
        alert("error");
      }
    });
  })
</script>
<script>
  $('#save').click(function(){
    var form=$("#contact")[0];
    var myform=new FormData(form);
    $.ajax({
      type:"post",
      url:"contact.php",
      data:myform,
      processData:false,
      contentType:false,
      cache:false,
      async:false,
      success:function(data){
        $("#result").html(data);
        $('#contact').trigger("reset");

      },
      error:function(err){
        alert("error");
      }
    })
  })
</script>