<?php
session_start();
require_once("includes/config.php");
if(isset($_POST)){
 $name=$_POST['name'];
$contact=$_POST['contactno'];
$reson=$_POST['reson'];
$_SESSION['name']=$name;
$_SESSION['contact']=$contact;
$_SESSION['reson']=$reson;

if(empty($name && $contact && $reson)){
    echo '<div class="alert alert-success">please fill this field</div>';
}
else{
   $query="insert into contact(name,contact_no,reason)values('$name','$contact','$reson')";
   $result=mysqli_query($con,$query);
   if($result){
  echo "your data is submited";
   }
   else{
 echo "please try again";

   }
}
}
?>