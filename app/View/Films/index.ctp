<section class="section section--page">
  <div class="row ws-medium--bottom">
      <div class="columns">
          <div class="page-heading">
              <p class="small-leading">shortfilms</p>
              <h2 class="medium-leading">hats & caps</h2>
          </div>
      </div>
  </div>



  <div>
    <?php foreach($filmtypes as $filmtype): ?><br>
    <?= $filmtype; ?>

      <?php foreach($films as $film): ?><br>
        <?= var_dump($film); ?>

      <?php endforeach; ?>
      <br><br>
   <?php endforeach; ?>

  </div>



</select>
