$('#btnpilih').click(function(event) {
  $('#modalpilih').modal('show');
});

$('#tbnilai').find('tr').click(function(event) {
  //var data = $(this).text();
  //console.log(data);
  var ak = $(this).find('td:eq(4)').text();
  var id = $(this).find('td:eq(0)').text();
  var a = $(this).find('td:eq(1)').text();
  var b = $(this).find('td:eq(2)').text();
  var c = $(this).find('td:eq(3)').text();
  //alert(id);
  $('#angkakredit').val(ak);
  $('#modalpilih').modal('hide');
  $('#namarubrik').attr('placeholder', a+" "+b+c);
});

$('#inputpak').submit(function(event) {
    event.preventDefault();
    var data = $(this).serialize();
    console.log(data);
});

$('#volume').keypress(function(event) {
  var ak = $('#angkakredit').val();
  var total = ak*$('#volume').val();
  $('#total').val(total);
});
