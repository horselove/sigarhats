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
             <?php 
             echo $this->Form->create('Product', [ 'lable' =>  false]); ?>

              <?=  $this->Form->input( 'size_id',  [ 'option' =>  $sizes, 'empty' => 'CHOOSE SIZE']); ?>
              <?=  $this->Form->input( 'concept_id',  [ 'option' =>  $concepts, 'empty' => 'CHOOSE CONCEPT' ]); ?>
              <?=  $this->Form->input( 'collection_id',  [ 'option' =>  $collections, 'empty' => 'CHOOSE COLLECTION' ] ); ?>
             
             <?php echo $this->Form->end(__('SEARCH PRODUCT')); ?>

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
                                <span></span>
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
	 <div id="posts-list">
          <ul class="block-list block-list--catalogue product-list">
            <?php foreach($products as $product) :?>
              <li class="product-list__item product-list__item--hoverable">
                  <?= $this->Html->link('
                    <img
                     class="product-list__item__image lazy"
                     data-original="'.$this->webroot.'img/small-cap.png"
                     alt="">
                    <span class="product-list__item__content">
                      <p class="product-list__item__concept">
                          ' . $product['concepts']['name'] .'
                      </p>
                      <h3 class="product-list__item__title">
                          ' . $product['Product']['name'] . '
                      </h3>
                    </span>
                  ',['controller' => 'products', 'action' => 'view/', $product['Product']['id'] ],['escape' => false]); ?>
                </li>
            <?php endforeach ;?>
            </ul>
	    </div>
                <?php
		echo $this->Paginator->next('Show more star wars posts...');
?>
        </div>
    </div>
</section>
<script>
  $(function(){
	var $container = $('#posts-list');

	$container.infinitescroll({
	  navSelector  : '.next',    // selector for the paged navigation 
	  nextSelector : 'a.next',  // selector for the NEXT link (to page 2)
	  itemSelector : '.post-item',     // selector for all items you'll retrieve
	  debug		 	: true,
	  dataType	 	: 'html',
	  loading: {
		  finishedMsg: 'No more posts to load. All Hail Star Wars God!',
		  img: '<?php echo $this->webroot; ?>img/spinner.gif'
		}
	  }
	);
  });

</script>
