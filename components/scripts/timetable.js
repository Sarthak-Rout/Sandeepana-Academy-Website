function viewtimetable(cls,grp) {
  $.ajax({
    url:'components/api/timetable.php',
    type:'POST',
    data:{
      class:cls,
      group:grp,
      action:'view',
    },
    dataType:'html',   //expect html to be returned
    success: function(response){
        $("#timetablediv").html(response);
    }
  });
}
