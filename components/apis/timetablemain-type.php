<?php
echo '<option>Choose Type</option>';
include("../../../config/db.php");
if (isset($_POST['class'])) {
  $class=$_POST['class'];
  if ($result=mysqli_query($mysqli,"SELECT DISTINCT type from timetablemain where class=$class")) {
    while ($row=mysqli_fetch_array($result)) {
      $type=$row['type'];


      if($result1 = mysqli_query($mysqli, "SELECT display From timetablegrouptypes where name='$type'"))
      while($res1 = mysqli_fetch_array($result1)){
        echo '<option value="'.$type.'">'.$res1['display'].'</option>';
      }

    }
  }
}
?>
