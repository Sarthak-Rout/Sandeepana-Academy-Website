<?php
echo '<option>Choose</option>';
include("../../../config/db.php");
if (isset($_POST['class']) and isset($_POST['type']) ) {
  $class=$_POST['class']; $type=$_POST['type'];
  if ($result=mysqli_query($mysqli,"SELECT DISTINCT subject from books where (class='$class' and type='$type')")) {
    while ($row=mysqli_fetch_array($result)) {
      echo '<option>'.$row['subject'].'</option>';
    }
  }
}
?>
