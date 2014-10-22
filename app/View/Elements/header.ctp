<!-- PARTIAL:HEADER -->

<nav class="top-bar top-bar--centered contain-to-grid" data-topbar role="navigation">
   <ul class="title-area  hide-for-medium-up">
    <li class="top-bar__logo top-bar__logo--centered"><a href="#"><img src="<?php echo $this->webroot; ?>img/logo-small.jpg" alt=""></a></li>
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="hide-for-small top-bar-section--secondary">
    <ul>
      <li><?= $this->Html->link('Hats & Caps', ['controller' => 'products']); ?></li>
      <li><?= $this->Html->link('shortfilms', ['controller' => 'films']); ?></li>

      <li class="top-bar__logo top-bar__logo--centered">
        <?= $this->Html->image( 'logo-small.jpg' , [
           'alt' => 'Sigar hats and caps logo' ,
           'url' => [ 'controller' => 'pages', 'action' => 'display', 'home' ]] ); ?>
      </li>

      <li><?= $this->Html->link('story', ['controller' => 'story']); ?></li>
      <li><?= $this->Html->link('Register your cap', ['controller' => 'register']); ?></li>
    </ul>
  </section>

  <section class="top-bar-section hide-for-medium-up">
      <!-- Left Nav Section -->
      <ul class="left">
      <li><?= $this->Html->link('Hats & Caps', ['controller' => 'products']); ?></li>
      <li><?= $this->Html->link('shortfilms', ['controller' => 'films']); ?></li>
      <li><?= $this->Html->link('story', ['controller' => 'story']); ?></li>
      <li><?= $this->Html->link('Register your cap', ['controller' => 'register']); ?></li>
      </ul>
    </section>
</nav>
