$(document).ready(function(){
$("#unsur").change(function(){
  var unsur = $(this).val();
  // $("#hasil").val(unsur);
  if (unsur == 'pf') {
    $("#jenjang").toggleClass('hide');
  }
  if (unsur == 'ppp') {
    $('#jenjang2').toggleClass('hide');
  }

});


});
