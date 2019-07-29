<?php
echo '<option>Choose</option>';
include("../../../config/db.php");
if (isset($_POST['class'])) {
  $class=$_POST['class'];
  if ($result=mysqli_query($mysqli,"SELECT DISTINCT type from books where class=$class")) {
    while ($row=mysqli_fetch_array($result)) {
      echo '<option>'.$row['type'].'</option>';
    }
  }
}
?>
