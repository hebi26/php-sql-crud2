<form id="my_form2" action="SQL/createshow.php" method="post">

  <input type="text" name="titre" placeholder="titre..." required="required"><br>
  <input type="text" name="artiste" placeholder="artiste..." required="required"><br>
  <input type="date" name="date" placeholder="Date : yyyy/mm/dd..." required="required"><br>
  <label for="selectspec" id="labelselectspec">Type de spectacle</label>
  <select id="selectspec" name="selectspec">
      <option value="0">Choisir un type</option>
      <option value="1">concert</option>
      <option value="2">Théatre</option>
      <option value="3">Humour</option>
      <option value="4">Danse</option>
  </select><br>
  <div class="optionspec">
  <label for="selectgenre" id="labelselectgenre">Genre 1 : </label>
  <select id="genre" name="selectgenre">
      <option value="1">Variété française</option>
      <option value="2">Variété internationale</option>
      <option value="3">Pop/Rock</option>
      <option value="4">Electro</option>
      <option value="5">Folk</option>
      <option value="6">Rap</option>
      <option value="7">Hip Hop</option>
      <option value="8">Slam</option>
      <option value="9">Reggae</option>
      <option value="10">Clubbing</option>
      <option value="11">RnB</option>
      <option value="12">Soul</option>
      <option value="13">Funk</option>
      <option value="14">Jazz</option>
      <option value="15">Blues</option>
      <option value="16">Country</option>
      <option value="17">Gospel</option>
      <option value="18">Musique du monde</option>
      <option value="19">Classique</option>
      <option value="20">Opéra</option>
      <option value="21">Autres</option>
      <option value="22">Drame</option>
      <option value="23">Comédie</option>
      <option value="24">Comtemporain</option>
      <option value="25">Monologue</option>
</select><br>

<label for="selectgenre2" id="labelselectgenre2">Genre 2 : </label>
<select id="genre2" name="selectgenre2">
    <option value="1">Variété française</option>
    <option value="2">Variété internationale</option>
    <option value="3">Pop/Rock</option>
    <option value="4">Electro</option>
    <option value="5">Folk</option>
    <option value="6">Rap</option>
    <option value="7">Hip Hop</option>
    <option value="8">Slam</option>
    <option value="9">Reggae</option>
    <option value="10">Clubbing</option>
    <option value="11">RnB</option>
    <option value="12">Soul</option>
    <option value="13">Funk</option>
    <option value="14">Jazz</option>
    <option value="15">Blues</option>
    <option value="16">Country</option>
    <option value="17">Gospel</option>
    <option value="18">Musique du monde</option>
    <option value="19">Classique</option>
    <option value="20">Opéra</option>
    <option value="21">Autres</option>
    <option value="22">Drame</option>
    <option value="23">Comédie</option>
    <option value="24">Comtemporain</option>
    <option value="25">Monologue</option>
</select><br>
</div>

  <input type="text" name="duration" placeholder="Durée : hh/mm/ss..."><br>
  <input type="text" name="starttime" placeholder="Heure de début : hh/mm/ss..."><br>

  <input type="submit" name="btnsubmit" value="Soumettre">

</form>
