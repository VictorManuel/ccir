<div class="noticias view">
<h2><?php  echo __('Noticia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenido'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['contenido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($noticia['Noticia']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($noticia['User']['id'], array('controller' => 'users', 'action' => 'view', $noticia['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noticia'), array('action' => 'edit', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Noticia'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('Are you sure you want to delete # %s?', $noticia['Noticia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticiasalbums'), array('controller' => 'noticiasalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticiasalbum'), array('controller' => 'noticiasalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Noticiasalbums'); ?></h3>
	<?php if (!empty($noticia['Noticiasalbum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Noticia Id'); ?></th>
		<th><?php echo __('Miniatura'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($noticia['Noticiasalbum'] as $noticiasalbum): ?>
		<tr>
			<td><?php echo $noticiasalbum['id']; ?></td>
			<td><?php echo $noticiasalbum['noticia_id']; ?></td>
			<td><?php echo $noticiasalbum['miniatura']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'noticiasalbums', 'action' => 'view', $noticiasalbum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'noticiasalbums', 'action' => 'edit', $noticiasalbum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'noticiasalbums', 'action' => 'delete', $noticiasalbum['id']), null, __('Are you sure you want to delete # %s?', $noticiasalbum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Noticiasalbum'), array('controller' => 'noticiasalbums', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
