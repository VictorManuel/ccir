<div class="padrones index">
	<h2><?php echo __('Padrones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($padrones as $padrone): ?>
	<tr>
		<td><?php echo h($padrone['Padrone']['id']); ?>&nbsp;</td>
		<td><?php echo h($padrone['Padrone']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($padrone['Padrone']['estado']); ?>&nbsp;</td>
		<td><?php echo h($padrone['Padrone']['numero']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $padrone['Padrone']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $padrone['Padrone']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $padrone['Padrone']['id']), null, __('Are you sure you want to delete # %s?', $padrone['Padrone']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Padrone'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('controller' => 'actividadesalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('controller' => 'actividadesalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
