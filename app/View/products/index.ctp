<?php
/**
*	Full product view
*/
?>

<!-- Section : featured caps-->
<section class="section section--page">
    <div class="row ws-medium--bottom">
        <div class="columns">
            <div class="page-heading">
                <p class="small-leading">Handcrafted</p>
                <h2 class="medium-leading">hats & caps</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="large-3 columns" id="scroll">
            <div data-scroll-fix="fixed">
                <select name="Size" id="size">
                    <option value="-" selected="selected">CHOOSE SIZE</option>
                </select>
                <select name="concepts" id="concepts">
                    <option value="-" selected="selected">CONCEPTS</option>
                </select>
                <select name="collection" id="collection">
                    <option value="-" selected="selected">COLLECTIONS</option>
                </select>
                <p>
                    <span>54</span> Caps Matching
                </p>
                <div class="hide-for-medium-down">
                    <div class="pagination">
                        <div class="pagination__count">
                            <div>
                                <span>1</span> / <span>5</span>
                            </div>
                        </div>
                        <div class="pagination__controls">
                            <a href="#" class="button button--round button--ghost pagination__nav-left">
                                <span><</span>
                            </a>
                            <a href="#" class="button button--round button--ghost pagination__nav-right">
                                <span>></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="large-9 columns">
            <ul class="block-list block-list--catalogue product-list">
                <?php foreach($products as $product) { ?>
                    <li class="product-list__item product-list__item--hoverable">
                        <?= $this->Html->link('
                            <img class="product-list__item__image lazy" data-original="/img/small-cap.png" alt="">
                            <span class="product-list__item__content">
                                <p class="product-list__item__concept">
                                    ' . $product['concepts']['name'] .'
                                </p>
                                <h3 class="product-list__item__title">
                                    ' . $product['Product']['name'] . '
                                </h3>
                            </span>
                        ',['action' => 'view/', $product['Product']['id']],['escape' => false]); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="show-for-medium-down">
                {{> pagination}}
            </div>
        </div>
    </div>
</section>

<?=  $this->Html->link('Log out', [ 'controller' => 'users', 'action' => 'logout' ]); ?>
