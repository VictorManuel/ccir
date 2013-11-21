<div class="alcances view">
<h2><?php  echo __('Alcance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alcance['Alcance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($alcance['Alcance']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alcance'), array('action' => 'edit', $alcance['Alcance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alcance'), array('action' => 'delete', $alcance['Alcance']['id']), null, __('Are you sure you want to delete # %s?', $alcance['Alcance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alcances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alcance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Legislaciontipos'), array('controller' => 'legislaciontipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legislaciontipo'), array('controller' => 'legislaciontipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Legislaciontipos'); ?></h3>
	<?php if (!empty($alcance['Legislaciontipo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Alcance Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($alcance['Legislaciontipo'] as $legislaciontipo): ?>
		<tr>
			<td><?php echo $legislaciontipo['id']; ?></td>
			<td><?php echo $legislaciontipo['alcance_id']; ?></td>
			<td><?php echo $legislaciontipo['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'legislaciontipos', 'action' => 'view', $legislaciontipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'legislaciontipos', 'action' => 'edit', $legislaciontipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'legislaciontipos', 'action' => 'delete', $legislaciontipo['id']), null, __('Are you sure you want to delete # %s?', $legislaciontipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Legislaciontipo'), array('controller' => 'legislaciontipos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
