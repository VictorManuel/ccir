<div class="circulares form">
<?php echo $this->Form->create('Circulare'); ?>
	<fieldset>
		<legend><?php echo __('Add Circulare'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('contenido');
		echo $this->Form->input('fecha');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Circulares'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
