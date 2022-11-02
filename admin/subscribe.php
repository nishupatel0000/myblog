<?php
// session_start();

include('includes/config.php');
if (isset($_POST)) {

    //     $fullname=$_POST['fullname'];              
    //     $email=$_POST['email'];
    //     $phone=$_POST['phone'];
    //     $designation=$_POST['designation'];
    //     $position=$_POST['position'];
    //     $qualification=$_POST['qualification'];
    //     $vocation=$_POST['vocation'];
    //     $join=$_POST['join'];
    //     $resume=$_FILES['resume']['name'];
    // print_r($resume);
    // list($txt, $ext) = explode(".", $resume);  
    // $image_name = time().".".$ext;
    // echo $image_name;
    $email = $_POST['email'];
    $to_email = $email;
    $subject = "Thanks So much for your support!....";
    $body = "new blog update";
    $header = "From: nishant.s2soft@gmail.com";
    $from = $header;





    if (empty($email)) {
        echo '<div class="alert alert-success">please fill this field</div>';
    } else {
        if (mail($to_email, $subject, $body, $from)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
        $query = "INSERT INTO subscribe(mail_id) VALUES ('$email')";
        $result = mysqli_query($con, $query);
        if ($result) {
            // swal("Good job!", "You clicked the button!", "success");
        }
    }
}
