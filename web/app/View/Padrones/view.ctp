<div class="padrones view">
<h2><?php  echo __('Padrone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($padrone['Padrone']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($padrone['Padrone']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($padrone['Padrone']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($padrone['Padrone']['numero']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Padrone'), array('action' => 'edit', $padrone['Padrone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Padrone'), array('action' => 'delete', $padrone['Padrone']['id']), null, __('Are you sure you want to delete # %s?', $padrone['Padrone']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Padrones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Padrone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('controller' => 'actividadesalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('controller' => 'actividadesalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actividadesalbums'); ?></h3>
	<?php if (!empty($padrone['Actividadesalbum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Padrone Id'); ?></th>
		<th><?php echo __('Miniatura'); ?></th>
		<th><?php echo __('Actividade Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($padrone['Actividadesalbum'] as $actividadesalbum): ?>
		<tr>
			<td><?php echo $actividadesalbum['id']; ?></td>
			<td><?php echo $actividadesalbum['padrone_id']; ?></td>
			<td><?php echo $actividadesalbum['miniatura']; ?></td>
			<td><?php echo $actividadesalbum['actividade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actividadesalbums', 'action' => 'view', $actividadesalbum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actividadesalbums', 'action' => 'edit', $actividadesalbum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actividadesalbums', 'action' => 'delete', $actividadesalbum['id']), null, __('Are you sure you want to delete # %s?', $actividadesalbum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('controller' => 'actividadesalbums', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
