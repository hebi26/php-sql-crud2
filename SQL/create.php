<?php include ('../php/conection.php');

if(!$_POST['card']){
$checkval= 0;
}
else{
$checkval=1;
}


$firstname= $_POST['nom'];
$lastname= $_POST['prenom'];
$birth= $_POST['birth'];
$numcard=(int)$_POST['num'];

if(!$_POST['num'] || $checkval== 0){
$numcard= NULL;
}
else{
$numcard=$_POST['num'];
}

var_dump($checkval, $numcard);

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
