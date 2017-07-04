<?php include('./php/header.php');
?>
<section class="formulaire">

</section>

<?php include('php/conection.php');
?>

<script>

$(".formulaire").load('./form/createform.php');

$('#my_form').on('submit', function (e) {
  // On empêche le navigateur de soumettre le formulaire
        e.preventDefault();

        var $form = $(this).serialize();

        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            data: form,
        });
    });


</script>

</body>
</html>
