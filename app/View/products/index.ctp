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

            </div>
        </div>
         <div class="large-9 columns">
	 <div id="posts-list">
          <ul class="block-list block-list--catalogue product-list  post-item">
            <?php
            foreach($products as $product) :?>
              <li class="product-list__item product-list__item--hoverable">
                  <?php

                  if(!empty ($images[$product['Product']['id']]) ) {
                      $img = $images[$product['Product']['id']]['Image']['img'];
                      $imageUrl = $this->webroot.'files/image/thumb_img/'.$images[$product['Product']['id']]['Image']['id'].'/thumb_'.$img;
                  }
                  else
                  {
                        //fallback on a image
                      $imageUrl = $this->webroot.'img/small-cap.png';
                  }
                  ?>
                  <?= $this->Html->link('
                    <img
                     class="product-list__item__image lazy"
                     data-original="'.$imageUrl.'" src="'.$imageUrl.'"
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
             <span style="visibility: hidden">
                <?php echo $this->Paginator->next('Show more...'); ?>
             </span>
        </div>
    </div>
</section>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
	<script src="<?php echo $this->webroot; ?>js/debug.js"></script>
	<script src="<?php echo $this->webroot; ?>js/jquery.infinitescroll.js"></script>
	<script src="<?php echo $this->webroot; ?>js/manual-trigger.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.infinitescroll.min.js"></script>
<script>
 $('#posts-list').infinitescroll({
	  navSelector  : '.next',    // selector for the paged navigation
	  nextSelector : '.next a',  // selector for the NEXT link (to page 2)
	  itemSelector : '.post-item',     // selector for all items you'll retrieve
	  debug		 	: true,
	  dataType	 	: 'html',
	  loading: {
		  finishedMsg: '',
		  img: '<?php echo $this->webroot; ?>img/spinner.gif'
		}
	  }
	);
</script>
