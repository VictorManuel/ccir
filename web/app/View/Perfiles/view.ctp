<div class="perfiles view">
<h2><?php  echo __('Perfile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Perfile'), array('action' => 'edit', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Perfile'), array('action' => 'delete', $perfile['Perfile']['id']), null, __('Are you sure you want to delete # %s?', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Perfiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perfile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($perfile['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ussername'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Perfile Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($perfile['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['ussername']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['nombre']; ?></td>
			<td><?php echo $user['foto']; ?></td>
			<td><?php echo $user['perfile_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
