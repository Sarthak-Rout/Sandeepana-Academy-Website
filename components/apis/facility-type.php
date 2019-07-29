<?php
echo '<option>Choose</option>';
include("../../../config/db.php");
if (isset($_POST['category'])) {
  $category=$_POST['category'];
  if ($result=mysqli_query($mysqli,"SELECT * from websitefacilities where category='$category' and status=1")) {
    while ($row=mysqli_fetch_array($result)) {
      echo '<option value="'.$row['filename'].'">'.$row['name'].'</option>';
    }
  }
}
?>
