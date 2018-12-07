<?php
get_header();
?>
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <div class="accueil">
	<h1>Recherchez</h1>
        <div>
          <input type="text" class="searchTerm" placeholder="type d'emplois">
        </div>
        <br/>
        <div>
          <input type="text" class="searchTerm" placeholder="Ville/Département/Région">
        </div>
        <br/>
      <div id="radio_buttons">
        <div>
          <input type="radio" id="huey" name="drone" value="huey"
                 checked>
          <label for="huey">CDD</label>
        </div>
        <div>
          <input type="radio" id="huey" name="drone" value="huey"
                 checked>
          <label for="huey">CDI</label>
        </div>
        <div>
          <input type="radio" id="huey" name="drone" value="huey"
                 checked>
          <label for="huey">Intérim</label>
        </div>
        <div>
          <input type="radio" id="huey" name="drone" value="huey"
                 checked>
          <label for="huey">Freelance</label>
        </div>
      </div>
      <br/>
      <input class="valider" type="submit" value="Valider">
    </div>
</body>
</html>
<?php
get_footer();
