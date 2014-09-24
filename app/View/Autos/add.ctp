
<div class="autos form">
<?php echo $this->Form->create('Auto'); ?>
	<fieldset>
		<legend><?php echo __('Add Auto'); ?></legend>
	<?php
		echo $this->Form->input('nombre');

		// echo $this->Form->input('id_persona');

		echo $this->Form->input('id_persona', array(
			'type' => 'select',
			'options' => $personas,
			'empty'   => false
			));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Autos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auto Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>

