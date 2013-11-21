<div class="actas form">
<?php echo $this->Form->create('Acta'); ?>
	<fieldset>
		<legend><?php echo __('Add Acta'); ?></legend>
	<?php
		echo $this->Form->input('numero');
		echo $this->Form->input('fecha');
		echo $this->Form->input('documento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Actas'), array('action' => 'index')); ?></li>
	</ul>
</div>
