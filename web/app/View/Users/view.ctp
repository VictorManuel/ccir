<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ussername'); ?></dt>
		<dd>
			<?php echo h($user['User']['ussername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($user['User']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perfile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Perfile']['id'], array('controller' => 'perfiles', 'action' => 'view', $user['Perfile']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Perfiles'), array('controller' => 'perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perfile'), array('controller' => 'perfiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Circulares'), array('controller' => 'circulares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Circulare'), array('controller' => 'circulares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Circulares'); ?></h3>
	<?php if (!empty($user['Circulare'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Circulare'] as $circulare): ?>
		<tr>
			<td><?php echo $circulare['id']; ?></td>
			<td><?php echo $circulare['titulo']; ?></td>
			<td><?php echo $circulare['contenido']; ?></td>
			<td><?php echo $circulare['fecha']; ?></td>
			<td><?php echo $circulare['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'circulares', 'action' => 'view', $circulare['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'circulares', 'action' => 'edit', $circulare['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'circulares', 'action' => 'delete', $circulare['id']), null, __('Are you sure you want to delete # %s?', $circulare['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Circulare'), array('controller' => 'circulares', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Noticias'); ?></h3>
	<?php if (!empty($user['Noticia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Contenido'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Noticia'] as $noticia): ?>
		<tr>
			<td><?php echo $noticia['id']; ?></td>
			<td><?php echo $noticia['titulo']; ?></td>
			<td><?php echo $noticia['contenido']; ?></td>
			<td><?php echo $noticia['fecha']; ?></td>
			<td><?php echo $noticia['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'noticias', 'action' => 'view', $noticia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'noticias', 'action' => 'edit', $noticia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'noticias', 'action' => 'delete', $noticia['id']), null, __('Are you sure you want to delete # %s?', $noticia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
