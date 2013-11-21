<div class="alcances form">
<?php echo $this->Form->create('Alcance'); ?>
	<fieldset>
		<legend><?php echo __('Add Alcance'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Alcances'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Legislaciontipos'), array('controller' => 'legislaciontipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legislaciontipo'), array('controller' => 'legislaciontipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
