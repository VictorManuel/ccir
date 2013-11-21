<div class="noticias index">
	<h2><?php echo __('Noticias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('contenido'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($noticias as $noticia): ?>
	<tr>
		<td><?php echo h($noticia['Noticia']['id']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['contenido']); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($noticia['User']['id'], array('controller' => 'users', 'action' => 'view', $noticia['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticiasalbums'), array('controller' => 'noticiasalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticiasalbum'), array('controller' => 'noticiasalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
