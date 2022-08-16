<?php
@include 'config.php';
if(mysqli_errno($conn)){
  echo'erroe';
}
$sql = 'DELETE FROM `robot_dir` WHERE  id='.$_GET['id'];
$res = mysqli_query($conn,$sql);
if($res){
	  echo "<script type= 'text/javascript'>";
      echo "window.alert('Deleted Successfully')";
      echo "</script>";
      header('location:index.php');
      }else{
      echo "<script type= 'text/javascript'>";
      echo "window.alert('No Deleted')";
      echo "</script>";
       }
?>