<?php include ('../php/conection.php');

// ----------------------RECUPERATION DS VARIABLES----------------------------
// variables clients
$firstname= $_POST['nom'];
$lastname= $_POST['prenom'];
$birth= $_POST['birth'];
$numcard=(int)$_POST['num'];
// variables card
$cardtype=$_POST['select'];

// ------------------------CONDITION & ENVOIE NUM CARTE------------------------

if(!$_POST['card']){
$checkval= 0;
  $numcard= NULL;
}
else{
$checkval=1;
  $numcard=$_POST['num'];

  $req = $pdo->prepare("INSERT INTO cards (cardNumber, cardTypesId)
  VALUES(:cardNumber, :cardTypesId)");

  $req->execute(array(
      'cardNumber' => $numcard,
      'cardTypesId' => $cardtype
    ));
}

// -----------------------AJOUT TABLE CLIENTS-------------------------------

$req = $pdo->prepare("INSERT INTO clients (lastName, firstName, birthDate, card, cardNumber)
VALUES(:lastName, :firstName, :birthDate, :card, :cardNumber)");

$req->execute(array(
    'lastName' => $firstname,
    'firstName' => $lastname,
    'birthDate' => $birth,
    'card' => $checkval,
    'cardNumber' => $numcard
  ));

print_r($pdo->errorInfo());



header('location: ../index.php');
