
<form id="my_form" action="SQL/create.php" method="post">

  <input type="text" name="nom" placeholder="nom..." required="required" pattern="[A-Za-z0-9]+"><br>
  <input type="text" name="prenom" placeholder="prenom..." required="required" pattern="[A-Za-z0-9]+"><br>
  <input type="date" name="birth" placeholder="Date : yyyy/mm/dd..." required="required"><br>
  <label for=card id="labelcard">Carte de fidélité</label><br>
  <input type="checkbox" name="card"><br>
  <div class="optioncli">
  <label for="select" id="labelselect">Type de carte :</label><br>
    <select id="select" name="select">
      <option value="1">Fidélité</option>
      <option value="2">Famille nombreuse</option>
      <option value="3">Etudiant</option>
      <option value="4">Employé</option>
    </select><br>
  <input type="text" name="num" placeholder="ex : 012345..." pattern="[0-9]+"><br>
</div>
  <input type="submit" name="btnsubmit" value="Soumettre">

</form>
