<div class="noticiasalbums index">
	<h2><?php echo __('Noticiasalbums'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('noticia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('miniatura'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($noticiasalbums as $noticiasalbum): ?>
	<tr>
		<td><?php echo h($noticiasalbum['Noticiasalbum']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($noticiasalbum['Noticia']['id'], array('controller' => 'noticias', 'action' => 'view', $noticiasalbum['Noticia']['id'])); ?>
		</td>
		<td><?php echo h($noticiasalbum['Noticiasalbum']['miniatura']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $noticiasalbum['Noticiasalbum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $noticiasalbum['Noticiasalbum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noticiasalbum['Noticiasalbum']['id']), null, __('Are you sure you want to delete # %s?', $noticiasalbum['Noticiasalbum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Noticiasalbum'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
