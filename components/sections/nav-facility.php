<?php
include("../../../config/db.php");
?>
<!-- facilities -->
<div id="facilities" style="display: none;">
  <div class="card">
    <div class="card-body text-center">
      <form class="" method="post">
        <div class="row">
          <div class="col-6">
            <label>Category</label>
            <select class="form-control" name="category" id="category" onchange="viewfcl()">
              <option value="">Choose</option>
              <?php
              if($result = mysqli_query($mysqli, "SELECT distinct category From websitefacilities where status=1 order by category ASC"))
              while($res = mysqli_fetch_array($result)){
                echo '<option value="'.$res['category'].'">'.ucfirst($res['category']).'</option>';
              }
              ?>
            </select>
          </div>
          <div class="col-6">
            <label>Type</label>
            <select class="form-control" name="name" id="name" onchange="viewfcldata()">

            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </form>
      <div id="facilitydiv">
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- //facilities -->
