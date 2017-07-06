<?php include('./php/header.php');
?>
<section class="formulaire">

</section>

<?php include('php/conection.php');
?>

<script>

// -----------function affichage form client---------------
function displayformcli(){
$(".formulaire").load('./form/createform.php');
}
// -----------function affichage form spectacle---------------
function displayformspec(){
$(".formulaire").load('./form/specform.php');
}
// ------------function affichage option client-----------------
function displayoptioncli(){
  $(".formulaire").delegate('input[name=card]', 'change', function(){
    if($('input[name=card]').is(':checked')){
      $('.optioncli').show();
    }
    else{
      $('.optioncli').hide();
    }
  });
}
// -------------function affichage option spectacle-----------
function displayoptionspec(){
$(".formulaire").delegate('#selectspec', 'change', function(){
  if($('#selectspec').val()=="1"){
    $('.optionspec').show();
  }
  else{
    $('.optionspec').hide();
  }
});
}
// ----------------function envoi formulaire-----------------
function envoiform(){
e.preventDefault();

var $form = $(this).serialize();

$.ajax({
    url: $form.attr('action'),
    type: $form.attr('method'),
    data: form,
});
}
// --------------------function affichage liste clients------------------
function displaycli(){
	$.ajax({
		 url : './SQL/listcli.php',
		 type : 'get',
		success: function(data){

			$(".formulaire").html('<h3>Liste des clients</h3>' + data);
    }
  });
}
// --------------function affichage spectacle------------------------------
function displayspec(){
  $.ajax({
     url : './SQL/listspec.php',
     type : 'get',
    success: function(data){

      $(".formulaire").html('<h3>Liste des spectacles</h3>' + data);
    }
  });
}
// -----------------------------------------------------------

$("#cli").click(function(){
displayformcli();
displayoptioncli();
});

$("#spec").click(function(){
displayformspec();
displayoptionspec();
});

$('#my_form').on('submit', function (e) {
envoiform();
});

$('#my_form2').on('submit', function (e) {
envoiform();
});

$("#listcli").click(function(){
displaycli();
});

$("#listspec").click(function(){
displayspec();
});

</script>

</body>
</html>
