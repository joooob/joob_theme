<?php

get_header();
?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">


  <div class="accueil">
	<h1>Recherchez</h1>
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
</main><!-- #main -->
  </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();



