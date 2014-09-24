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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
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
		
		<?php echo $this->Html->meta('icon'); ?>
	    <?php //echo $this->Html->css('cake.generic'); ?>
		<?php echo $this->fetch('meta'); ?>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

		<?php echo $this->fetch('css'); ?>

		<style type="text/css">

		ul.pagination li.current {
		    position: relative;
		    float: left;
		    padding: 6px 12px;
		    margin-left: -1px;
		    line-height: 1.428571429;
		    text-decoration: none;
		    background-color: #fff; 
		    border: 1px solid #ddd;
		}

		</style>

		<!-- custom assets css -->
		<?php if(isset($css)){ $this->html->asset_css($css); } ?>

</head>
<body>

		<?php echo $this->element('navbar'); ?>
		

		<div class="container">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>

	    <!-- echo $this->element('sql_dump');  -->
		
		<?php echo $this->Html->script('Jquery'); ?>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


		<?php echo $this->fetch('script'); ?>

		<!-- custom assets js -->
		<?php if(isset($js)){	$this->html->asset_js($js);	} ?>
		<?php echo $this->Js->writeBuffer(); ?>	

	
</body>
</html>
