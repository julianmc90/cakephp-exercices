<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>

	<ul class="pagination">
	<?php
		echo ($this->Paginator->hasPrev()) ? $this->Paginator->prev('«', array('tag' => 'li'), null, null) : '<li class="disabled"><a href="#">«</a></li>';


		echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li'));   

		echo ($this->Paginator->hasNext()) ? $this->Paginator->next('»', array('tag' => 'li'), null, null) : '<li class="disabled"><a href="#">»</a></li>';
  
	?>
	</ul>

	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellido']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php 
				echo $this->Html->link('View', 
						array('action' => 'view', 
						$persona['Persona']['id']),
						array('class'=>'btn btn-primary')
						); 
			?>
			
			<?php 
				echo $this->Html->link(__('Edit'), 
					  array('action' => 'edit', 
					  $persona['Persona']['id']),
					  array('class'=>'btn btn-info')
					  ); 

			?>
			
			<?php 
		
				echo $this->Form->postLink(__('Delete'), 
					array('action' => 'delete', $persona['Persona']['id']), 
					array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', 
					$persona['Persona']['id'])); 
			?>
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
	<ul class="pagination">
	<?php
		echo ($this->Paginator->hasPrev()) ? $this->Paginator->prev('«', array('tag' => 'li'), null, null) : '<li class="disabled"><a href="#">«</a></li>';


		echo $this->Paginator->numbers(array('separator' => false, 'tag' => 'li'));   

		echo ($this->Paginator->hasNext()) ? $this->Paginator->next('»', array('tag' => 'li'), null, null) : '<li class="disabled"><a href="#">»</a></li>';
  
	?>
	</ul>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?></li>
	</ul>
</div>
