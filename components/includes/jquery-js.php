<script>
    $(window).on('load', function() {
      $.ajax({
        url:'components/sections/results-iframe.php',
        type:'POST',
        data:{
          action:'view',
        },
        dataType:'html',
        success: function(response){
            $("#res").html(response);

        }
      });
    });

  function hideall(){
    $('#navhm').removeClass("active");
    $('#navab').removeClass("active");
    $('#navglry').removeClass("active");
    $('#navtt').removeClass("active");
    $('#navfct').removeClass("active");
    $('#navfcl').removeClass("active");
    $('#results').removeClass("active");

    $( "#nav-content" ).empty();
  }


  function show_home(){
    hideall();
    $('#navhm').addClass("active");
    $.ajax({
      url:'components/sections/nav-home.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#nav-content").html(response);
      }
    });
  }

  function show_about(){
    hideall();
    $('#navab').addClass("active");
    $.ajax({
      url:'components/sections/nav-about.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#nav-content").html(response);
          $('#about').slideDown("slow");
      }
    });
    $('#about').slideDown("slow");
  }

  function show_gallery(){
    hideall();
    $('#navglry').addClass("active");
    $.ajax({
      url:'components/sections/nav-gallery.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
        $("#nav-content").html(response);
        $('#gallery').slideDown("slow");
      }
    });
  }

  function show_faculty(){
    hideall();
    $('#navfct').addClass("active");
    $.ajax({
      url:'components/sections/nav-faculty.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
        $("#nav-content").html(response);
        $('#faculties').slideDown("slow");
      }
    });
  }

  function show_facility(){
    hideall();
    $('#navfcl').addClass("active");
    $.ajax({
      url:'components/sections/nav-facility.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
        $("#nav-content").html(response);
        $('#facilities').slideDown("slow");
      }
    });
  }

  function show_timetable(){
    hideall();
    $('#navtt').addClass("active");
    $.ajax({
      url:'components/sections/nav-timetable.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
        $("#nav-content").html(response);
        $('#timetable').slideDown("slow");
      }
    });
  }

  function show_results(){
    hideall();
    $('#navresults').addClass("active");
    $.ajax({
      url:'components/sections/nav-results.php',
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
        $("#nav-content").html(response);
        $('#results').slideDown("slow");
      }
    });
  }
</script>

<script type="text/javascript">
  function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    var stop_top = $('#stop-anchor').offset().top;
    if (window_top > div_top && window_top < stop_top) {
        $('#stick').addClass('sticky');
    }
    else {
        $('#stick').removeClass('sticky');
    }
  }

  $(document).ready(function () {
      $(window).scroll(sticky_relocate);
  });
</script>

<script>
  function viewtype(){
    $( "#type" ).empty();
    $( "#group" ).empty();
    $( "#timetablediv" ).empty();

    var selectedclass=$("#class" ).val();

    $.ajax({
      url:'components/apis/timetablemain-type.php',
      type:'POST',
      data:{
        class:selectedclass,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#type").html(response);

      }
    });
  }

  function viewtype2(){
    $( "#type2" ).empty();

    var selectedclass=$("#class2" ).val();

    $.ajax({
      url:'components/apis/timetablemain-type.php',
      type:'POST',
      data:{
        class:selectedclass,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#type2").html(response);

      }
    });

  }

  function viewgroup(){
    $( "#group" ).empty();
    $( "#timetablediv" ).empty();

    var selectedclass=$("#class").val();
    var selectedtype=$("#type").val();

    $.ajax({
      url:'components/apis/timetablemain-group.php',
      type:'POST',
      data:{
        class:selectedclass,
        type:selectedtype,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#group").html(response);
      }
    });

  }

  function viewtimetable(){
    $( "#timetablediv" ).empty();

    var selectedclass=$("#class").val();
    var selectedtype=$("#type").val();
    var selectedgroup=$("#group").val();

    $.ajax({
      url:'components/apis/timetable.php',
      type:'POST',
      data:{
        class:selectedclass,
        type:selectedtype,
        group:selectedgroup,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#timetablediv").html(response);
      }
    });

  }

  function viewfcl(){
    $( "#name" ).empty();
    $( "#facilitydiv" ).empty();

    var selectedcategory=$("#category" ).val();

    $.ajax({
      url:'components/apis/facility-type.php',
      type:'POST',
      data:{
        category:selectedcategory,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#name").html(response);
      }
    });
  }

  function viewfcldata(){
    $( "#facilitydiv" ).empty();

    var selectedfilename=$("#name" ).val();

    $.ajax({
      url:'components/sections/'+selectedfilename,
      type:'POST',
      data:{
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#facilitydiv").html(response);
      }
    });
  }

  function viewlibtype(){
    $( "#libtype" ).empty();
    $( "#libsubject" ).empty();
    $( "#libbooks" ).empty();

    var selectedclass=$("#libclass" ).val();

    $.ajax({
      url:'components/apis/library-type.php',
      type:'POST',
      data:{
        class:selectedclass,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#libtype").html(response);
      }
    });
  }

  function viewlibsubject(){
    $( "#libsubject" ).empty();
    $( "#libbooks" ).empty();

    var selectedclass=$("#libclass" ).val();
    var selectedtype=$("#libtype" ).val();

    $.ajax({
      url:'components/apis/library-subjects.php',
      type:'POST',
      data:{
        class:selectedclass,
        type:selectedtype,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#libsubject").html(response);
      }
    });
  }

  function viewbooks(){
    $( "#libbooks" ).empty();

    var selectedclass=$("#libclass" ).val();
    var selectedtype=$("#libtype" ).val();
    var selectedsubject=$("#libsubject" ).val();

    $.ajax({
      url:'components/apis/library.php',
      type:'POST',
      data:{
        class:selectedclass,
        type:selectedtype,
        subject:selectedsubject,
        action:'view',
      },
      dataType:'html',
      success: function(response){
          $("#libbooks").html(response);
      }
    });
  }

</script>
