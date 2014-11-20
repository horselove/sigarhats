<div class="row product-view">
    <dl class="tabs" data-tab>
      <?php foreach ($storys as $tabline): ?>
        <?php if($tabline['Story']['id'] == 1): ?>
          <dd class="active">
        <?php else: ?>
          <dd>
        <?php endif; ?>
          <a href="#story<?=$tabline['Story']['id']?>"><?= $tabline['Story']['langues'];?></a>
          </dd>
      <?php endforeach; ?>
    </dl>

    <div class="tabs-content">
      <?php foreach ($storys as $story): ?>
          <div id="story<?=$story['Story']['id']?>"
        <?php if($story['Story']['id'] == 1): ?>
           class="content active">
        <?php else: ?>
           class="content">
        <?php endif; ?>
        <h1><?=$story['Story']['headline']?></h1>
        <?=
            $story['Story']['story']
        ?>
        </div>
      <?php endforeach; ?>
</div>
</div>
