<div class="actividadesalbums form">
<?php echo $this->Form->create('Actividadesalbum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Actividadesalbum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('padrone_id');
		echo $this->Form->input('miniatura');
		echo $this->Form->input('actividade_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actividadesalbum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Actividadesalbum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Padrones'), array('controller' => 'padrones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Padrone'), array('controller' => 'padrones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
