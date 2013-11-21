<div class="autoridades form">
<?php echo $this->Form->create('Autoridade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Autoridade'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Autoridade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Autoridade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Autoridades'), array('action' => 'index')); ?></li>
	</ul>
</div>
