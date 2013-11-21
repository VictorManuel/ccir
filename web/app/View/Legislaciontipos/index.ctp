<div class="legislaciontipos index">
	<h2><?php echo __('Legislaciontipos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('alcance_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($legislaciontipos as $legislaciontipo): ?>
	<tr>
		<td><?php echo h($legislaciontipo['Legislaciontipo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($legislaciontipo['Alcance']['id'], array('controller' => 'alcances', 'action' => 'view', $legislaciontipo['Alcance']['id'])); ?>
		</td>
		<td><?php echo h($legislaciontipo['Legislaciontipo']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $legislaciontipo['Legislaciontipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $legislaciontipo['Legislaciontipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $legislaciontipo['Legislaciontipo']['id']), null, __('Are you sure you want to delete # %s?', $legislaciontipo['Legislaciontipo']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Legislaciontipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alcances'), array('controller' => 'alcances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alcance'), array('controller' => 'alcances', 'action' => 'add')); ?> </li>
	</ul>
</div>
