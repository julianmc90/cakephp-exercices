<div class="autos form">
<?php echo $this->Form->create('Auto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Auto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('id_persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Auto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Auto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Autos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auto Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
