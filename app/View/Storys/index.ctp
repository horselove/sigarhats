
<div class="row ws-medium--bottom">
<div class="large-7 columns">
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
<!-- static viedo -->
<p style="margin-top:15px;">Video Sigarhats 2013</p>
<iframe src="//player.vimeo.com/video/81700472?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="350px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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
</div>
