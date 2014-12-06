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
<?php
$filmTypeId = 0;
  foreach($films as $film):
    if($film['filmtype']['id'] != $filmTypeId) {
      echo '<h2>'. $film['filmtype']['name'].'</h2>';
    }
    echo $film['Film']['embed_url'].'<br>';
  $filmTypeId = $film['filmtype']['id'];
  endforeach;
?>
</div>
</select>
