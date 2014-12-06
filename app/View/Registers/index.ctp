<section class="section section--page">
  <div class="row ws-medium--bottom">
    <div class="row">

       <div class="large-6 columns">

        <?php
        echo $this->Session->flash();
                
            echo $this->Form->create('Register', [
                'method' => 'post',
                'controller' => 'register'
            ]);
        ?>
        <?=
            $this->Form->input( 'necklabelid', [
                'name' => 'necklabel_id',
                'label' => 'Enter you necklabel id',
                'placeholder' => 'Necklable id',
                'value' => ''
            ]);
         ?>
        <?= $this->Form->end(__('Register your cap')); ?>

       </div>

   </div>
  </div>
</section>
