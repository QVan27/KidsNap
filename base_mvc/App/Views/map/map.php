<?php


?>

<h3>My Google Maps Demo</h3>
<!-- div for the map -->
<div id="map"></div>
<p>
    <label for="champ-ville">Ville : </label>
    <input type="text" id="champ-ville">
</p>
<p>
    <label for="champ-distance">Distance : </label>
    <input type="range" min="1" max="200" id="champ-distance">
</p>
<p id="valeur-distance"></p>
<form action="" method="post" id="form_map">
    <input type="text" placeholder="Adresse" id="adresse" value="">
    <input type="submit" value="Envoyer">
</form>

<select name="Selection" id="name">

</select>