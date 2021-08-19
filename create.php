<?php
include("config.php");
?>

<?php
 if(isset($_POST['sub'])) {
    $n1=$_POST['name'];
    $e1=$_POST['email'];
    $b1=$_POST['bal'];


    $result=mysqli_query($mysqli,"INSERT into user values('','$n1','$e1','$b1')");
    $resu=mysqli_query($mysqli,"SELECT* from user ORDER by Id");
   if($result)
   { 
      echo "<script> alert('User created successfully');
      window.location='home.php';
      </script>";
   }
  else
   {
      echo "error while performing operation";
    }

 }

  ?>










 


