<div class="legislaciontipos form">
<?php echo $this->Form->create('Legislaciontipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Legislaciontipo'); ?></legend>
	<?php
		echo $this->Form->input('alcance_id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Legislaciontipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alcances'), array('controller' => 'alcances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alcance'), array('controller' => 'alcances', 'action' => 'add')); ?> </li>
	</ul>
</div>
