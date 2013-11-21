<div class="actividades form">
<?php echo $this->Form->create('Actividade'); ?>
	<fieldset>
		<legend><?php echo __('Add Actividade'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Actividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('controller' => 'actividadesalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('controller' => 'actividadesalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
