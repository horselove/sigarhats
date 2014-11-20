<section class="section section--page">
  <div class="row ws-medium--bottom">
    <div class="row">

       <div class="large-6 columns">

          <?php echo $this->Form->create('Productitem'); ?>
            <?=
                $this->Form->input( 'necklabelid', ['name' => 'necklabel_id', 'lable' => 'Enter you necklabel id', 'placeholder' => 'necklable id', 'value' => ''] );
             ?>
          <?php echo $this->Form->end(__('Register your cap')); ?>

       </div>

   </div>
  </div>
</section>
