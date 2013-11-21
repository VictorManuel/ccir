<div class="legislaciones form">
<?php echo $this->Form->create('Legislacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Legislacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('titulo');
		echo $this->Form->input('fecha');
		echo $this->Form->input('documento');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('legislaciontipo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Legislacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Legislacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Legislaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
