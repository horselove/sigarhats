
<section class="section section--page">
    <div class="row ws-medium--bottom">
        <div class="columns">
            <div class="page-heading">
                <p class="small-leading">Concact</p>
                <h2 class="medium-leading">Sigar hats & caps</h2>
            </div>
        </div>
    </div>
    <div class="row product-view">
        <div class="medium-6 columns">
        <?= $this->Element('basement'); ?>
        </div>
        <div class="medium-6 columns ws-xlarge product-view--content">
            <?php
            echo $this->Form->create('Contact');
              echo $this->Form->input('name', ['placeholder' => 'Your name']);
              echo $this->Form->input('email', ['placeholder' => 'Reply email']);
              echo $this->Form->input('subject' , ['placeholder' => 'Subject']);
              echo $this->Form->textarea( 'message',['description', 'placeholder' => 'Message'] );
            echo $this->Form->end('Send');
            ?>
        </div>
    </div>
</section>
