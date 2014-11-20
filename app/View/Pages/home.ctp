<!-- Section : hero movie -->
<div class="hero">
    <div class="hero__media lazy" data-original="img/hero.jpg">
    </div>
    <div class="row hero__inner">
        <div class="column">
            <div class="teaser teaser__on-dark">
                <p class="teaser__small-line small-leading">hats & caps</p>
                <h2 class="teaser__heading-line large-leading ">One man crafting the best<br>scandinavian caps in great materials</h2>
                <p class="teaser__small-line small-leading">handmade in nordvest, copenhagen</p>
            </div>
        </div>
    </div>
</div>

<!-- Section : featured caps-->
<section class="section section--page no-pb">
    <div class="row ws-medium--bottom">
        <div class="columns">
            <div class="page-heading">
                <p class="small-leading">Handcrafted</p>
                <h2 class="medium-leading">hats & caps</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column small-text-center medium-text-right">
            <p>
                <!-- <a href="catalogue.html" class="alt-text-link">See all caps</a> -->
                <?= $this->Html->link('See all caps', ['controller' => 'products', 'action' => 'index'], ['class' => 'alt-text-link']); ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <?= $this->element('products'); ?>
        </div>
    </div>
</section>

<!-- Section : featured materials-->
<section class="section section--page">
    <div class="row ws-medium--bottom">
        <div class="columns">
            <div class="page-heading">
                <p class="small-leading">Materials</p>
                <h2 class="medium-leading">For custom hats & caps</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column">
                <?= $this->element('materials'); ?>
        </div>
    </div>
</section>

<!-- Section : How to mesure your cap size -->
<section class="section section--page section--dim text-center">
    <div class="row">
        <div class="columns">
            <div class="teaser">
                <p class="teaser__small-line small-leading">How to</p>
                <h2 class="teaser__heading-line medium-leading">Messure your head for cap size</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="medium-5 columns medium-centered">
        <br>
            <p>
                (1)  Use a tape Measure, wrap it arround your head,
                right where you normally would  have the edge of a hat or cap.
            <p class="no-mb">
                (2)  The meassure shows your size in cm, that is
                translated directly into cap size.
            </p>
        </div>
    </div>
</section>

<!-- Section : hero story -->
<div class="hero">
    <div class="hero__media lazy" data-original="img/story.jpg">
    </div>
    <div class="row hero__inner">
        <div class="medium-5 columns medium-centered">
            <div class="teaser teaser__on-dark">
                <p class="teaser__small-line small-leading">hats & caps</p>
                <h2 class="teaser__heading-line large-leading ">The story</h2>
                <br>
                <p>
                    Tought by an old dude, like a young padawan i was. Much learning i had to do in many years before a jedi in cap making i could call myself.
                </p>
                <br>
                <?= $this->Html->link('Read full story',
                    ['controller' => 'story', 'action' => 'index'],
                    [ 'class' => 'teaser__link']); ?>
            </div>
        </div>
    </div>
</div>
