<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Sigar hats & caps');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				
				<?php 
				 echo $this->Html->Link(
				 	$this->Html->image('Logo.png', ['alt' => 'Sigar hats and caps logo', 'border' => '0']),
					'http://localhost/sigarhats/Vendor/cakephp/cakephp/app/',
					['escape' => false]
				);
				?>
				<?php 
				//echo $this->Html->link($cakeDescription, 'http://cakephp.org'); 
				?>
			</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<footer class="row">
				<div class="column large-12">
					<ul class="hori-list footer">
						<li><span>SIGAR HATS & CAPS</span></li>
						<li><span>hello@sigarhats.dk</span></li>
						<li><span>+ 45 28 14 89 29</span></li>
						<li><span>Glentevej 50 basement</span></li>
						<li><span>2400 Copenhagen NV Denmark</span></li>
				</div>
			</footer>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
