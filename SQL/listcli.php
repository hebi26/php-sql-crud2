<?php

include('../php/conection.php');

$req = $pdo->query('SELECT * FROM clients
                    JOIN cards
                    ON clients.cardNumber = cards.cardNumber
                    JOIN cardTypes
                    ON cards.cardTypesId = cardTypes.id
                    ');

while ($data = $req->fetch()){

$typetable = array(1=>'Fidélité',2=>'Famille Nombreuse', 3=>'Etudiant', 4=>'Employé');

?>

<form id="my_form3" action="SQL/update.php" method="post">

  <input type="text" name="nom" placeholder="nom..." required="required" value="<?php echo ($data->firstName); ?>" pattern="[A-Za-z0-9]+"><br>
  <input type="text" name="prenom" placeholder="prenom..." required="required" value="<?php echo ($data->lastName); ?>" pattern="[A-Za-z0-9]+"><br>
  <input type="date" name="birth" placeholder="Date : yyyy/mm/dd..." required="required" value="<?php echo ($data->birthDate); ?>"><br>
  <label for=card id="labelcard">Carte de fidélité</label><br>

  <input type="checkbox" name="card"<?php if ($data->card == 1){?> checked="checked" <?php } ?>/><br>

  <label for="select" id="labelselect">Type de carte :</label><br>
    <select id="select" name="select">
      <?php
        foreach ($typetable as $key =>$value) {
      ?>
      <option value="<?=$key?>" <?php if ($key == $data->cardTypesId) {echo 'selected';} ?>><?=$value?></option>
      <?php
        }
      ?>
    </select><br>
    <input type="text" name="num" placeholder="ex : 012345..." value="<?php echo ($data->cardNumber); ?>" pattern="[0-9]+"><br>
    <input type="submit" name="btnsubmit" value="Soumettre"><br><hr>
  </form>
<?php
  };

  ?>
