<div class="legislaciones index">
	<h2><?php echo __('Legislaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('legislaciontipo_id'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($legislaciones as $legislacione): ?>
	<tr>
		<td><?php echo h($legislacione['Legislacione']['numero']); ?>&nbsp;</td>
		<td><?php echo h($legislacione['Legislacione']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($legislacione['Legislacione']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($legislacione['Legislacione']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($legislacione['Legislacione']['legislaciontipo_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legislacione['Legislacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legislacione['Legislacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legislacione['Legislacione']['id']), null, __('Are you sure you want to delete # %s?', $legislacione['Legislacione']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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