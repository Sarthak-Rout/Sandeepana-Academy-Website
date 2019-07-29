<?php
include("../../../config/db.php");
?>
<!-- timetable -->
<div id="timetable" style="display: none;">
  <div class="card">
    <div class="card-body text-center">
      <form class="" method="post">
        <div class="row">
          <div class="col-4">
            <label>Class</label>
            <select class="form-control" name="class" id="class" onchange="viewtype()">
              <option value="">Choose</option>
              <?php
              if($result = mysqli_query($mysqli, "SELECT * From class order by id desc"))
              while($res = mysqli_fetch_array($result)){
                echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
              }
              ?>
            </select>
          </div>
          <div class="col-4">
            <label>Type</label>
            <select class="form-control" name="type" id="type" onchange="viewgroup()">

            </select>
          </div>
          <div class="col-4">
            <label>Group</label>
            <select class="form-control" name="group" id="group" onchange="viewtimetable()">

            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </form>
      <div id="timetablediv">
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- //timetable -->
