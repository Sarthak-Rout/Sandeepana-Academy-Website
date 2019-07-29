<?php
include("../../../config/db.php"); $nop=$class=$subject=$type=$facultyid=$subid=$tm='';
if (isset($_SESSION['id']) and isset($_POST['class']) and isset($_POST['type']) and isset($_POST['subject'])) {
  $class=$_POST['class']; $type=$_POST['type']; $subject=$_POST['subject'];
}
?>

<table class="table table-hover" id="lib-transactions" class="display" style="width:100%">
    <thead>
        <th>Code</th>
        <th>Name</th>
        <th>Publisher</th>
        <th>Author</th>
    </thead>

    <tbody>
      <?php
        if($result = mysqli_query($mysqli, "SELECT * From books where (class='$class' and type='$type' and subject='$subject')"))
        while($res = mysqli_fetch_array($result)){
          echo '<tr>';
          echo '<td>'.$res['sku'].'</td>';
          echo '<td>'.$res['name'].'</td>';
          echo '<td>'.$res['publisher'].'</td>';
          echo '<td>'.$res['author'].'</td>';
          echo '</tr>';
        }
      ?>
    </tbody>
</table>
