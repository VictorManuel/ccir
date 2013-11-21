<div class="actividadesalbums index">
	<h2><?php echo __('Actividadesalbums'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('padrone_id'); ?></th>
			<th><?php echo $this->Paginator->sort('miniatura'); ?></th>
			<th><?php echo $this->Paginator->sort('actividade_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actividadesalbums as $actividadesalbum): ?>
	<tr>
		<td><?php echo h($actividadesalbum['Actividadesalbum']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividadesalbum['Padrone']['id'], array('controller' => 'padrones', 'action' => 'view', $actividadesalbum['Padrone']['id'])); ?>
		</td>
		<td><?php echo h($actividadesalbum['Actividadesalbum']['miniatura']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($actividadesalbum['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesalbum['Actividade']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actividadesalbum['Actividadesalbum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actividadesalbum['Actividadesalbum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actividadesalbum['Actividadesalbum']['id']), null, __('Are you sure you want to delete # %s?', $actividadesalbum['Actividadesalbum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Padrones'), array('controller' => 'padrones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Padrone'), array('controller' => 'padrones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
