<?php
include("../../../config/db.php"); $nop=$facultyid=$subid=$tm='';
if (isset($_POST['class']) and isset($_POST['type']) and isset($_POST['group'])) {
  $class=$_POST['class']; $type=$_POST['type']; $group=$_POST['group'];
  if ($result=mysqli_query($mysqli,"SELECT id,nop from timetablemain where (class='$class' and type='$type' and batch='$group')")) {
    while ($row=mysqli_fetch_array($result)) {
      $id=$row['id'];
      $nop=$row['nop'];
    }
  }
}
$dt=date("Y-m-d");
?>

<table class="table table-hover table-responsive table-borderless">
  <thead class="">
      <th>Day</th>
      <?php
        for ($i=1; $i<=$nop ; $i++) {
          echo '<th>Period '.$i.'</th>';
        }
      ?>
  </thead>
  <tbody  style="text-align:left;">
    <?php
    $disp = date('Y-m-d',strtotime("This Week Monday", strtotime($dt)));
    $c=0;
    for($i=0;$i<=6;$i++)
    {
      $date = date('d-m-Y',strtotime($disp));
      $day = date('D',strtotime($disp));
      $dystr = (string)date('l',strtotime($disp));
      echo '<tr>';
      echo '<td><p>'.$dystr.'</p></td>';
        for ($j=1; $j<=$nop ; $j++) {

          if($result = mysqli_query($mysqli, "SELECT * From timetableperiods where ttid=$id And day='$day' And period=$j"))
          while($res = mysqli_fetch_array($result)){
            $tid=$res['id'];
            $subid=$res['subid'];
            $facultyid=$res['facultyid'];
            $tm=$res['tm'];
          }

          $facultyname=$subjectname=" ";


          if($result = mysqli_query($mysqli, "SELECT * From subjects where subjectcode='$subid'"))
            while($res = mysqli_fetch_array($result))
              $subjectname = $res['name'];

          if($result = mysqli_query($mysqli, "SELECT * From teachers where facultyid=$facultyid"))
            while($res = mysqli_fetch_array($result))
              $facultyname= $res['name'];

          if ($facultyid==0) {
            $facultyid=" ";
          }

          echo '<td><p><b>'.$subid.' - '.$subjectname.'</b><br><small>'.$facultyname.'<br>'.$tm.'</small></p></td>';
        }
      $disp = date('Y-m-d',strtotime("+1 Day", strtotime($disp)));
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
