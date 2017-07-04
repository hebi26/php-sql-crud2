
<form id="my_form" action="SQL/create.php" method="post">

  <input type="text" name="nom" placeholder="nom..." required="required" pattern="[A-Za-z0-9]+"><br>
  <input type="text" name="prenom" placeholder="prenom..." required="required" pattern="[A-Za-z0-9]+"><br>
  <input type="date" name="birth" placeholder="yy/mm/dd..." required="required"><br>
  <label for=card id="labelcard">Carte de fidélité</label><br>
  <input type="checkbox" name="card"><br>
  <input type="text" name="num" placeholder="ex : 012345..." pattern="[0-9]+"><br>
  <input type="submit" name="btnsubmit" value="Soumettre">

</form>
