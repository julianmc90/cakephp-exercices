<div class="autos view">
<h2><?php echo __('Auto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auto['Auto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($auto['Auto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Persona'); ?></dt>
		<dd>
			<?php echo h($auto['Auto']['id_persona']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auto'), array('action' => 'edit', $auto['Auto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auto'), array('action' => 'delete', $auto['Auto']['id']), array(), __('Are you sure you want to delete # %s?', $auto['Auto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Autos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auto Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($auto['auto_persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($auto['auto_persona'] as $autoPersona): ?>
		<tr>
			<td><?php echo $autoPersona['id']; ?></td>
			<td><?php echo $autoPersona['nombre']; ?></td>
			<td><?php echo $autoPersona['apellido']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personas', 'action' => 'view', $autoPersona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personas', 'action' => 'edit', $autoPersona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $autoPersona['id']), array(), __('Are you sure you want to delete # %s?', $autoPersona['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Auto Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
