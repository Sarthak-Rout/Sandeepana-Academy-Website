
<?php include("../config/db.php"); $errormsg="Enroll Now";
if(isset($_POST['email']))  {
		$name = $_POST['name'];
    $email = $_POST['email'];
    $cno = $_POST['cno'];
    $course = $_POST['course'];
    $class = $_POST['class'];

				$mailto = "enroll@sandeepana.co.in";
				$mailSub = "New Enrollment Received";

				$mailMsg = "Here are details of new Registration.";
				$mailMsg .=" <br> Name : ".$name."";
        $mailMsg .=" <br> Email : ".$email."";
        $mailMsg .=" <br> Contact : ".$cno."";
        $mailMsg .=" <br> Course : ".$course."";
        $mailMsg .=" <br> Class : ".$class."";

				require '../registration/PHPMailer-master/PHPMailerAutoload.php';
				$mail = new PHPMailer();
				$mail ->IsSmtp();
				$mail ->SMTPDebug = 0;
				$mail ->SMTPAuth = true;
				$mail->SMTPOptions = array(
        	'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
        	)
    		);
				$mail ->SMTPSecure = 'tls';
				$mail ->Host = "smtp.hostinger.in";
				$mail ->Port = 587;
				$mail ->IsHTML(true);
				$mail ->Username = "admin@sandeepana.co.in";
				$mail ->Password = "1234qwer";
				$mail ->SetFrom("admin@sandeepana.co.in","Sandeepana Academy Enrollment");
				$mail ->Subject = $mailSub;
				$mail ->Body = $mailMsg;
				$mail ->AddAddress($mailto);

					if($mail->Send())
					$errormsg ="Enrollment Successful";

	 }
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Sandeepana Academy - Best CBSE, CHSE, JEE, NEET Coaching Institute in Bhubaneswar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Sandeepana Academy - Best CBSE, CHSE, JEE, NEET Coaching Institute in Bhubaneswar ">
    <meta name="keyword" content="Sandeepana Academy,best coaching institute in bhubaneswar, CBSE Tutorial Classes in bhubaneswar,CHSE Tuition Center,JEE Coaching Classes,NEET Coaching Classes,Integrated Coaching Classes,board exams coaching, tuition in bhubaneswar, coaching institute in bhubaneswar,top neet coaching centre in odisha, top neet coaching centre in bhubaneswar, top jee coaching centre in odisha, top jee coaching centre in bhubaneswar, top aiims coaching centre in odisha, top aiims coaching centre in bhubaneswar, top cbse coaching centre in odisha, top cbse coaching centre in bhubaneswar, top chse coaching centre in odisha, top chse coaching centre in bhubaneswar, best neet coaching centre in odisha, best neet coaching centre in bhubaneswar, best jee coaching centre in odisha, best jee coaching centre in bhubaneswar, best aiims coaching centre in odisha, best aiims coaching centre in bhubaneswar, best cbse coaching centre in odisha, best cbse coaching centre in bhubaneswar, best chse coaching centre in odisha, best chse coaching centre in bhubaneswar, top neet coaching classes in odisha, top neet coaching classes in bhubaneswar, top jee coaching classes in odisha, top jee coaching classes in bhubaneswar, top aiims coaching classes in odisha, top aiims coaching classes in bhubaneswar, top cbse coaching classes in odisha, top cbse coaching classes in bhubaneswar, top chse coaching classes in odisha, top chse coaching classes in bhubaneswar, best neet coaching classes in odisha, best neet coaching classes in bhubaneswar, best jee coaching classes in odisha, best jee coaching classes in bhubaneswar, best aiims coaching classes in odisha, best aiims coaching classes in bhubaneswar, best cbse coaching classes in odisha, best cbse coaching classes in bhubaneswar, best chse coaching classes in odisha, best chse coaching classes in bhubaneswar, coaching classes in Sastri Nagar, coaching classes in Nayapalli, coaching classes in Cuttack Road, coaching classes in Jaydev Vihar, coaching classes in Delta Square, coaching classes in madhusudan Nagar, coaching classes in Rasulgarh, coaching classes in Chandrasekharpur, coaching classes in Saheed Nagar, coaching classes in Ganga Nagar, coaching classes in Malipada, coaching classes in Jagamara, coaching classes in Patia Collage Road, coaching classes in Patia, coaching classes in Satya Nagar, coaching classes in Khandagiri, coaching classes in Hanspal, coaching classes in Vimtangi, coaching classes in Bhola Chandaka, coaching classes in Acharya Vihar, coaching classes in BJB Nagar, coaching classes in Ghatikia, coaching classes in Gautam Nagar, coaching classes in Pahal, coaching classes in Bomikhal, coaching classes in Samantarapur, coaching classes in Uttara, coaching classes in Dumduma, coaching classes in Tankapani Road, coaching classes in Lakshmi Sagar, coaching classes in Lewis Road, coaching classes in Vani Vihar, coaching classes in Khandgiri, coaching classes in Sailashree Vihar, coaching classes in Janla, coaching classes in Badaraghunathpur, coaching classes in Sundarpada, coaching classes in Mancheswar, coaching classes in Jatni Road, coaching classes in Madanpur, coaching classes in Pokhariput, coaching classes in Harapur, coaching classes in Tamando, coaching classes in Mahatab Road, coaching classes in Panchagaon, coaching classes in Barbil, coaching classes in Palasuni, coaching classes in Raghunathpur, coaching classes in Kalarahang, coaching classes in Baramunda, coaching classes in Budhapada, coaching classes in Pathargadia, coaching classes in Soubhagya Nagar, coaching classes in Sardeipur, coaching classes in Gajpati Nagar, coaching classes in Damana, coaching classes in Birabandha, coaching classes in Shreeram Nagar, coaching classes in Shamantrapur, coaching classes in Sahaspur, coaching classes in Nuapali, coaching classes in Forest Park, coaching classes in Patrapada, coaching classes in Haripur, coaching classes in Ranasinghpur, coaching classes in Shree vihar, coaching classes in Kharavela Nagar, coaching classes in Naharkanta, coaching classes in Jagannath Sadak, coaching classes in Pubasasan, coaching classes in Bhubaneswar-Puri Highway, coaching classes in Kapilprasad, coaching classes in Lingipur, coaching classes in Bargarh, coaching classes in Dandiapali, coaching classes in Gouru Market Road, coaching classes in Kantbada, coaching classes in NH 203, coaching classes in Bhadrak, coaching classes in Rudrapur, coaching classes in Khordha, coaching classes in Shampur, coaching classes in Niladri Vihar, coaching classes in Nandankanan Road, coaching classes in Phulanakhara, coaching classes in Chandaka, coaching classes in Andharua, coaching classes in BBSR, coaching classes in Shastri Nagar, coaching classes in Kalinga Nagar, coaching classes in Uttara Chhak, coaching classes in NH-5, coaching classes in corridor of info city II, coaching classes in Kesora, coaching classes in Surya Nagar, coaching classes in Argul, coaching classes in Mahanadi Road, coaching classes in Jail Square, coaching classes in Satyabhampur, coaching classes in Jharpada, coaching classes in Sampur, coaching classes in Shankarpur, coaching classes in Shyampur, coaching classes in Haridaspur, coaching classes in Paniora, coaching classes in Khandagiri, coaching classes in Dhauli, coaching classes in Kalpana Square, coaching classes in Chak, coaching classes in Mendhasala, coaching classes in Jatani, coaching classes in Panposh, coaching classes in Retang Mouza, coaching classes in Old Town, coaching classes in Balabhadrapur, coaching classes in Mouza-Ghatikia, coaching classes in G.G.P. Colony, coaching classes in Palaspur, coaching classes in vivekananda marg, coaching classes in Botanda, coaching classes in Khandapara, coaching classes in Chhatabar, coaching classes in Pallaspalli, coaching classes in Garage Square, coaching classes in Ravi Talkies, coaching classes in Gothapatna, coaching classes in IRC Village, coaching classes in Santarapur, coaching classes in Vaishnomata Vihar Phase 1, coaching classes in Nalco Square, coaching classes in Ashok Nagar, coaching classes in Puri Road, coaching classes in VSS Nagar, coaching classes in Laxmisagar, coaching classes in Rasulgarh Square, coaching classes in Nakhara, coaching classes in Pipili, coaching classes in Ratanga, coaching classes in Atala, coaching classes in Balianta, coaching classes in Bankual, coaching classes in Unit 6, coaching classes in Bhimatangi Housing Colony, coaching classes in Pitapally, coaching classes in Tangibanta, coaching classes in Bapuji Nagar, coaching classes in Sundarpur, coaching classes in Nuabanta, coaching classes in Matiapada, coaching classes in Sisupalgarh, coaching classes in Gudiapokhari, coaching classes in Paikarapur, coaching classes in Saleswar, coaching classes in Chakeisaini, coaching classes in Benupur, coaching classes in Pratap Nagari, coaching classes in Koradakanta, coaching classes in Bhingarpur, coaching classes in Similipatana, coaching classes in Hairajpur, coaching classes in Bhagabatipur, coaching classes in Kaimatia, coaching classes in Kujimahal, coaching classes in Unit 4, coaching classes in Unit-9, coaching classes in Badagada, coaching classes in Ghangapatna, coaching classes in Sijua, coaching classes in Puri Canal Road, coaching classes in Laxmi Vihar, coaching classes in Gopabandhu Nagar, coaching classes in Kalinga Vihar, coaching classes in Nuagan, coaching classes in Jagmohan Nagar, coaching classes in Jagannath Vihar, coaching classes in Subudhipur, fiitjee bhubaneswar, akash institute bhubaneswar, resonance bbsr, gate coaching in bbsr, school teaching jobs in bhubaneswar, career launcher bbsr, tuition job in bhubaneswar, fiitjee bhubaneswar odisha, vibrant iit jee academy bhubaneswar odisha, maths tuition in bhubaneswar, lectureship in bhubaneswar, t.i.m.e. bhubaneswar,  odisha , times institute saheed nagar bhubaneswar, time bjb nagar, aims nayapalli, vidwan classes iit jee bhubaneswar,  odisha, omm tutors bhubaneswar odisha, cbse coaching classes in bhubaneswar, coaching centre near me, coaching classes near me, best medical coaching centre in bhubaneswar, allen institute bhubaneswar address, genome classes bbsr, career power bbsr, jobs in coaching institute in bhubaneswar, tuition for class 6 near me, coaching classes in Bharatpur, coaching classes in Laxmi Nagar, coaching classes in Pandra, coaching classes in Pandav Nagar, coaching classes in Khordha Road, coaching classes in Kuha, coaching classes in Jayarsasan, coaching classes in Shreekhetra Vihar, coaching classes in Alarpur, coaching classes in Bagalpur, coaching classes in Bamphakuda, coaching classes in Padhansahi, coaching classes in Ramachandrapur, coaching classes in Mahura, coaching classes in Narasinghpur, coaching classes in Baragarh">
    <meta name="description" content="Sandeepana Academy: Leading institute for CBSE, CHSE, Medical and Engineering Entrance Exam Coaching in Bhubaneswar. We are one among the best CBSE Coaching Institute in Bhubaneswar. ">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://www.sandeepana.co.in/logo.png">
    <link rel="icon" href="https://www.sandeepana.co.in/logo.png">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <style media="screen">
      .hide-scroll {
        overflow:hidden;
      }
			/* -- Footer reveal -- */
			@media only screen and (min-width : 100px) {
			#main-content {
			  position: relative;
			  z-index: 1;
			  margin-bottom: 400px;
			  -webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
			  -moz-box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
			  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
			 }

			#main-footer {
			  position: fixed;
			  z-index: -1;
			  height: 400px;
			  bottom: 0;
			  left: 0;
			  right: 0;
			 }
			}
			
	    .top-wrapper {
		    height: auto;
		    background: url(images/bg1.jpg) center center fixed;
		    background-repeat: no-repeat;
		    background-size: cover;
			}
			.scholarship-bg {
		    height: auto;
		    background: url(images/bg2.jpg) center center fixed;
		    background-repeat: no-repeat;
		    background-size: cover;
			}
    </style>



<!-- End Google Tag Manager -->
  </head>
  <body class="d-flex flex-column h-100">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGNJC6Q" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="main-content">
    <section class="top-wrapper" id="formtop">
      <div id="sticky-anchor"></div>
      <header>
        <div class="bg-bluegrad-transparent">
          <div class="container-fluid pt-4 pt-md-1">
            <div class="row py-3">
              <div class="col-12 col-md-6">
                <div class="row">
                  <div class="col-4 text-center">
                    <img class="img-fluid" src="sndp.png" width="100px" alt="" >
                  </div>
                  <div class="col text-center">
                    <h6 style="color:white; font-size:16px; padding-top:30px;"><b>  Sandeepana Academy </b> <br>"A gateway to explore more."</h6>
                  </div>
                </div>
              </div>
              <div class="col text-center">
                <h6 style="color:white; font-size:16px; padding-top:30px;"> <b>  CBSE | CHSE | Medical | Engineering </b> <br> One stop solution to your educational needs. </h6>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="m-0">
        <div class="row m-0 justify-column-center">
          <div class="col-12 col-sm-6 col-md-7 pl-md-5 px-3 pt-3" >
            <div class="sticky-top">
              <div class="nav-scroller hide-scroll bg-white box-shadow my-3 card">
                <?php include 'components/includes/nav.php'; ?>
              </div>
            </div>
            <div id="nav-content">
			    <?php include 'components/sections/nav-home.php'; ?>
			</div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div id="stick" class="sticky">
              <form method="post" name="user_registration" id="user_registration" class="form" novalidate="novalidate" >
                <div class="formHeader text-center">
                  <h3><?php echo $errormsg; ?></h3>
                </div>
                <div class="formBody">
                  <div class="form-group">
                    <figure><img src="images/user-name.png"></figure>
                    <input type="text" name="name" id="name" class="form-control" maxlength="50" placeholder="Student Name" <?php if($errormsg=="Enroll Now") echo 'required'; else echo "disabled";?> >
                  </div>
                  <div class="form-group">
                    <figure><img src="images/email.png"></figure>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" <?php if($errormsg=="Enroll Now") echo 'required'; else echo "disabled";?> >
                  </div>
                  <div class="form-group">
                    <figure><img src="images/phone.png"></figure>
    							  <input type="tel" name="cno" id="cno" placeholder="Contact Number" class="form-control" required="" maxlength="10" aria-required="true" <?php if($errormsg=="Enroll Now") echo 'required'; else echo "disabled";?> >
                  </div>
									<div class="form-group">
										<figure><img src="images/course.png"></figure>
                    <select id="class2" name="class" class="form-control" onchange="viewtype2();" <?php if($errormsg=="Enroll Now") echo 'required'; else echo "disabled";?> >
                      <option value="">Choose Class</option>
				              <?php
				              if($result = mysqli_query($mysqli, "SELECT * From class order by id desc"))
				              while($res = mysqli_fetch_array($result)){
				                echo '<option value="'.$res['id'].'">'.$res['name'].'</option>';
				              }
				              ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <figure><img src="images/course.png"></figure>
                    <select name="course" id="type2" class="form-control" <?php if($errormsg=="Enroll Now") echo 'required'; else echo "disabled";?>>

                    </select>
                  </div>
                  <div class="container-fluid text-center">
                    <div class="row">
                      <?php if($errormsg=="Enroll Now") echo '<input type="submit" id="personal-submit" class="submit btn" value="Proceed">'; ?>
                    </div>
                  </div>
                    <br>
                    <div class="tc-pp text-center"><p>By submitting this form you agree to our <a href="https://www.sandeepana.co.in/terms.php" target="_blank"><span style="color:#1d8df5;">Terms &amp; Conditions</span></a> and <a href="https://www.sandeepana.co.in/privacy-policy.php" target="_blank"><span style="color:#1d8df5;">Privacy policy.</span></a></p></div>

										<br><center><div class="addthis_inline_follow_toolbox text-center"></div></center>
                </div>
                <div class="clearfix"></div>
            </form>
            </div>
          </div>
          <div class="col-sm-12 col-md-1">
            <br><br><br>
          </div>
        </div>

      </div>

      <div class="row justify-column-center text-center m-0 ">
        <div class="col-12 col-sm-6 col-md-7 pl-md-5 px-3 pt-3">
          <div class="row mt-1 mb-5">
            <div class="col-md-12">
							<iframe class="card" width="100%" height="420" src="https://www.youtube.com/embed/_-2_cPcolkY?modestbranding=1&autoplay=1&amp;loop=1&amp;rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
          	</div>
        	</div>
      	</div>
	      <div id="stop-anchor"></div>
			</div>
    </section>

    <section class="wrapper scholarship-bg">
      <div class="container marg50">
        <div class="row">
          <div class="col scholarshipDiv">
            <div class="heading heading-white text-left">
              <h2> Why Sandeepana Academy ?</h2>
              <p>A thousands of reason to why choose Sandeepana. </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 p15">
            <div class="border-left bg-white p-3">
              <p class="mb-0">Outstanding<code class="highlighter-rouge"> Digital Technolgy</code> to meet all requirements of a student. </p>
              <details>
                <summary>Know More</summary>
                <p class="mb-0">
                  <a href="#" data-toggle="tooltip" title="Download App"> Sandeepana Student Portal </a> <br>
                  <a> Online Exam Portal </a>  <br>
                  <a> Digital Library </a>  <br>
                  <a> Digital Question Papers and solutions immediately after exam. </a>
                </p>
              </details>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 p15">
            <div class="border-left bg-white p-3">
              <p class="mb-0">Daily based <code class="highlighter-rouge"> Doubt Clearing Classes </code> both online and offline.</p>
              <details>
                <summary>Know More</summary>
                <p class="mb-0">
                  <a> 15 Mins after the respective class offline </a> <br>
                  <a> or anytime over online  </a>
                </p>
              </details>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 p15">
            <div class="border-left bg-white p-3">
              <p class="mb-0">Weekly, Monthly <code class="highlighter-rouge"> Test Series </code> both online and offline.</p>
              <details>
                <summary>Know More</summary>
                <p class="mb-0">
                  <a> Several series of offline/online tests are taken based on chapters and topics. </a> <br>
                  <a> The results are immediately in the student portal with question paper and solutions.</a>
                </p>
              </details>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 p15">
            <div class="border-left bg-white p-3">
              <p class="mb-0">Best of best <code class="highlighter-rouge"> Faculties & Staffs </code> striving hard to give their best. </p>
              <a href=" " data-toggle="tooltip" title="Download App"> Know More </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 p15">
            <div class="border-left bg-white p-3">
              <p class="mb-0">All new <code class="highlighter-rouge"> Smart Class Technology </code> simulates with projectors and digital boards.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 p15">
            <div class="border-left bg-white p-3">
              <p class="mb-0">
                At Sandeepana <code class="highlighter-rouge"> learning is fun  </code> rather feeling it as burden. <br> And Lot More.......
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="res">

    </section>



    <section class="bg-light top-wrapper pb-5">
      <div class="container-fluid pt-5">
        <div class="heading py-2 text-center">
          <h2>Our Result at a Glance</h2>
          <img src="images/heading-bottom-design.png">
        </div>

        <div class="clearfix"></div>

        <div class="row">

          <div class="col-sm-3 col-6 qualified text-center">
            <div class="num">
              350+
            </div>
            <span>Students Joined in</span>
            <h3>2018 Batch(VI-XII)</h3>
          </div>

          <div class="col-sm-3 col-6 qualified text-center">
            <div class="num">
              40+
            </div>
            <span>Students Scored</span>
            <h3>above 90% in 2018 Boards</h3>
          </div>

          <div class="col-sm-3 col-6 qualified text-center">
            <div class="num">
              30+
            </div>
            <span>Students Qualified in</span>
            <h3>JEE 2018</h3>
          </div>

          <div class="col-sm-3 col-6 qualified text-center">
            <div class="num">
              15+
            </div>
            <span>Students Qualified in</span>
            <h3>NEET 2018</h3>
          </div>

        </div>


      </div>
    </section>
	  <?php include 'components/includes/footer.php'; ?>
</div>
<div id="main-footer">
			<section id="google-map" style="background-color: #ececec!important;">
				<iframe src="https://www.google.com/maps/d/embed?mid=1vO8eUJyWgjwIDvs5BNGN6EQbA93oTyEW" style=" width: 100%; min-height: 400px; border: 0;"></iframe>
	    </section>
</div>

		<?php include 'components/includes/js.php'; ?>
		<?php include 'components/includes/jquery-js.php'; ?>
		
  </body>
</html>
