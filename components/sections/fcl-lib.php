<?php include("../../../config/db.php"); ?>
<div id="library">
  <div class="my-3 text-left">
    <form class="" method="post">
      <div class="row">
        <div class="col-12">
          <p>Libraries play a vital role in encouraging and promoting the process of learning and gaining knowledge.
            Sandeepana students can have access to a wide range of books and resources.
            Reading improves social skills, knowledge, mental health, academic performance and offers numerous other benefits.
            With wide range of CBSE/CHSE/JEE/NEET books from vi-xii, all students get an opportunity to learn and progress as per their interests and capabilities.
          </p>

          <h5>Rules</h5>
          <ul>
            <li>Refundable Library Security Fee of Rs 1000 is charged to avail Sandeepana Library Facility.</li>
            <li>A student can issue either 1 or 2 books at a time. </li>
            <li>Issued books has to be returned/re-issued after 10-14 days of time. </li>
            <li>Nominial fine of Rs 2 per day per book will be charged if not returned in time.</li>
            <li>In case of any wear and tear or book loss, Student will have to give the replacement of book or the book fee will be deducted from security fees.</li>
          </ul>
          <hr>
          <h5 class="text-center">Browse Available Books in Library</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <label>Class</label>
          <select class="form-control" name="class" id="libclass" onchange="viewlibtype()">
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
          <select class="form-control" name="type" id="libtype" onchange="viewlibsubject()">

          </select>
        </div>
        <div class="col-4">
          <label>Subject</label>
          <select class="form-control" name="subject" id="libsubject" onchange="viewbooks()">

          </select>
        </div>
        <div class="clearfix"></div>
      </div>
    </form>
    <div id="libbooks">
      <div class="clearfix"></div>
    </div>
  </div>
</div>
