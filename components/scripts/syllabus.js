function viewsyllabus(subjectcode) {
  $.ajax({
    url:'components/api/syllabus.php',
    type:'POST',
    data:{
      subjectcode:subjectcode,
      action:'view',
    },
    dataType:'html',   //expect html to be returned
    success: function(response){
        $("#syllabusdiv").html(response);
    }
  });

}
