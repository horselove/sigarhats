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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    echo $this->Html->meta('');
    echo $this->Html->css('main');
    echo $this->fetch('meta');
    echo $this->fetch('script');
    ?>
</head>
<body>
    <?= $this->Session->flash(); ?>
    <?= $this->element('header'); ?>

    <div>
        <?= $this->fetch('content'); ?>
    </div>

    <?= $this->element('footer'); ?>



    <!-- Sql dumb for data -->
    <?= $this->element('all_data'); ?>
    <?= $this->element('sql_dump'); ?>

    <!-- Lé javascripts -->
    <?php
    echo $this->Html->script('vendor');
    echo $this->Html->script('redactor.min');
    echo $this->Html->script('app');
    ?>
</body>
</html>
