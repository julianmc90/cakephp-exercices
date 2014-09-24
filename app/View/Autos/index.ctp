<div class="autos index">
	<h2><?php echo __('Autos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('id_persona'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($autos as $auto): ?>
			<tr>
				<td><?php echo h($auto['Auto']['id']); ?>&nbsp;</td>
				<td><?php echo h($auto['Auto']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($auto['Auto']['id_persona']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $auto['Auto']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $auto['Auto']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $auto['Auto']['id']), array(), __('Are you sure you want to delete # %s?', $auto['Auto']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<div class="paging">
			<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('New Auto'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Auto Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
