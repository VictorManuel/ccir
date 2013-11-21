<div class="autoridades form">
<?php echo $this->Form->create('Autoridade'); ?>
	<fieldset>
		<legend><?php echo __('Add Autoridade'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('cargo');
		echo $this->Form->input('foto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Autoridades'), array('action' => 'index')); ?></li>
	</ul>
</div>
