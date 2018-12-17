$(document).ready(function() {
  $('.edit').click(function() {
    var id = $(this).val();
    //console.log(id);
    $('#formedit').removeClass('hide',700).addClass('animated fadeInDown');
    $('#formpengajuan').fadeOut().delay(1000);
  });
  $('#btnkembali').click(function() {
    $('#formedit').addClass('hide').fadeOut(1000);
    $('#formpengajuan').show(1000);
  });
  var id = $('#btndelete').val();

});
