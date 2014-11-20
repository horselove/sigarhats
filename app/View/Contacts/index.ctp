
<h2 class="medium-leading">Contact</h2>
<p>You welcome to email me here or hello@sigarhats.dk</p>
<p>You can allso concact me on my phone but i cant remember my number sorry</p>
<?php
echo $this->Form->create('Contact');
  echo $this->Form->input('name', ['placeholder' => 'Your name']);
  echo $this->Form->input('email', ['placeholder' => 'Reply email']);
  echo $this->Form->input('subject' , ['placeholder' => 'Subject']);
  echo $this->Form->textarea( 'message',['description', 'placeholder' => 'Message'] );
echo $this->Form->end('Send');
?>
