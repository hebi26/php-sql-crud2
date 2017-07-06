<?php

include('../php/conection.php');

$title=$_POST['titre'];
$performer=$_POST['artiste'];
$date=$_POST['date'];
$type=$_POST['selectspec'];
$genre1=$_POST['selectgenre'];
$genre2=$_POST['selectgenre2'];
$duration=$_POST['duration'];
$starttime=$_POST['starttime'];

if($_POST['selectspec']==1){
  $genre1=$_POST['selectgenre'];
  $genre2=$_POST['selectgenre2'];
}
else{
  $genre1=NULL;
  $genre2=NULL;
}

var_dump($title, $performer, $date, $type, $genre1, $genre2, $duration, $starttime);

$req = $pdo->prepare("INSERT INTO shows (title, performer, date, showTypesId, firstGenresId, secondGenreId, duration, startTime)
VALUES(:title, :performer, :date, :showTypesId, :firstGenresId, :secondGenreId, :duration, :startTime)");

$req->execute(array(
    'title' => $title,
    'performer' => $performer,
    'date' => $date,
    'showTypesId' => $type,
    'firstGenresId' => $genre1,
    'secondGenreId' =>$genre2,
    'duration' => $duration,
    'startTime' => $starttime
  ));

  print_r($pdo->errorInfo());

header('location: ../index.php');
 ?>
