<?php

@include 'config.php';
if(mysqli_errno($conn)){
  echo'erroe';
}

if(isset($_POST['submit'])){
   $dirction = mysqli_real_escape_string($conn, $_POST['options']);

$insert = "INSERT INTO `robot_dir`(`dirction`) VALUES('$dirction')";
         $res=mysqli_query($conn, $insert);
          if($res){
            echo "<script type= 'text/javascript'>";
           echo "window.alert('Insert Successfully')";
           echo "</script>";
            }else{
          echo "<script type= 'text/javascript'>";
           echo "window.alert('No INSERT')";
           echo "</script>";
           }
     };
?>

<!DOCTYPE html>
<html>
<head>
  <title>robot</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="form-container">
    <form action="" method="POST">
      <h3>Control My Robort</h3>
     <select name="options">
       <option>right</option>
       <option>left</option>
       <option>front</option>
       <option>behind</option>
     </select>
      <input type="submit" name="submit" value="register now" class="form-btn">

      <br><br>
    </div>
	<div style="margin-right:200pt ;margin-left:450pt;">
    <table  border="1" cellpadding="5" width="20pt">
      <tr>
      </form>
	  <td><strong>Id Number</strong></td>
      <td><strong>Dirction</strong></td>
      <td colspan="3"><strong>Action</strong></td>
	 <?php
	 $sql = 'SELECT * FROM `robot_dir`';
     $res = mysqli_query($conn,$sql);
	$i=1;
	while($row = mysqli_fetch_assoc($res)){
	?>
	<tr>
	    <td><?php echo $row['id']; ?></td>
    	<td><?php echo $row['dirction']; ?></td>
    	<td><a href="javascript:void(0)" onClick="delRecord(<?php echo $row['id']; ?>)
    		"style="color:red;font-size: 20px;border-style:soled;" >Delete</a></td>
    </tr>
    <?php
	}
	?>
    </tr>
	</table>
	</div>
	<script>
function delRecord(id){
	if(confirm('Are you want to delete?')){
		window.location = 'delete.php?id='+id;
	}
}
</script>
</body>
</html>