<section class="section section--page">
  <div class="row ws-medium--bottom">
    <div class="row">

       <div class="large-6 columns">

       <?php echo $this->Form->create('Register', array(
    'controller' => 'register',
           'method' => 'post','type' => 'file'
)); ?>

    <?= $this->Form->input( 'name', ['placeholder' => 'Name','required'=>'true','value'=>(!empty($data['RegisteredCap']['name'])?$data['RegisteredCap']['name']:'')] ); ?>
    <?= $this->Form->input( 'location', ['placeholder' => 'location', 'label' => 'Location / city','required'=>'true','value'=>(!empty($data['RegisteredCap']['location'])?$data['RegisteredCap']['location']:'')] ); ?>
    <?= $this->Form->input( 'birth', ['placeholder' => ' birthyear', 'label' => 'Birthyear', 'value'=>(!empty($data['RegisteredCap']['birth'])?$data['RegisteredCap']['birth']:'')] ); ?>
    <?= $this->Form->input( 'profession', ['placeholder' => 'profession', 'label' => 'Profession / Custom field of interest', 'required'=>'true','value'=>(!empty($data['RegisteredCap']['profession'])?$data['RegisteredCap']['profession']:'')] ); ?>
    <?= $this->Form->input( 'email', ['placeholder' => 'E-mail','required'=>'true','value'=>(!empty($data['RegisteredCap']['email'])?$data['RegisteredCap']['email']:'')] ); ?>
       <input type="file" name="image_url" />
       <?php
           if(!empty($data['RegisteredCap']['image_url']))
           {
       ?>
            <img src="<?php echo $this->webroot.$data['RegisteredCap']['image_url']; ?>" height="400px" />
           <?php

       }
?>
    <?= $this->Form->input( 'productitem_id', ['type' => 'hidden', 'value' => $productItemId] ); ?>
           <?= $this->Form->input( 'id', ['type'=>'hidden','value'=>(!empty($data['RegisteredCap']['id'])?$data['RegisteredCap']['id']:'')] ); ?>
           <?= $this->Form->input( 'necklabel_id', ['type' => 'hidden', 'value' => $necklableId] ); ?>
           <?= $this->Form->input( 'registercap', ['type' => 'hidden', 'value' =>'yes'] ); ?>
    <?= $this->form->submit( 'Register you cap' )?>

<?php echo $this->Form->end(); ?>

       </div>

   </div>
  </div>
</section>
