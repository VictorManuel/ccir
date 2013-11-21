<div class="padrones form">
<?php echo $this->Form->create('Padrone'); ?>
	<fieldset>
		<legend><?php echo __('Edit Padrone'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('estado');
		echo $this->Form->input('numero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Padrone.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Padrone.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Padrones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('controller' => 'actividadesalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('controller' => 'actividadesalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
