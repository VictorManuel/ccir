<div class="actividades view">
<h2><?php  echo __('Actividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividade'), array('action' => 'edit', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividade'), array('action' => 'delete', $actividade['Actividade']['id']), null, __('Are you sure you want to delete # %s?', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('controller' => 'actividadesalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('controller' => 'actividadesalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actividadesalbums'); ?></h3>
	<?php if (!empty($actividade['Actividadesalbum'])): ?>
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
		foreach ($actividade['Actividadesalbum'] as $actividadesalbum): ?>
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
