<?php

include('../php/conection.php');

$req = $pdo->query('SELECT title, performer, date, duration, startTime, type, firstGenresId, secondGenreId,
                    genres.genre, genres2.genre AS genre2 FROM shows
                    JOIN showTypes
                    ON shows.showTypesId = showTypes.id
                    JOIN genres
                    ON shows.firstGenresId = genres.id
                    JOIN genres genres2
                    ON shows.secondGenreId = genres2.id
                    ');


while ($data = $req->fetch()){


?>
<p><b>Titre : </b><?php echo ($data->title); ?></p>
<p><b>Performer : </b><?php echo ($data->performer); ?></p>
<p><b>Date : </b><?php echo ($data->date); ?></p>
<p><b>Type du spectacle : </b><?php echo ($data->type); ?></p>
<p><b>Genre : </b><?php echo ($data->genre); ?> et <?php echo ($data->genre2); ?></p>
<p><b>Durée : </b><?php echo ($data->duration); ?></p>
<p><b>Heure de début : </b><?php echo ($data->startTime); ?></p><hr><br>

<?php
  };

  ?>
