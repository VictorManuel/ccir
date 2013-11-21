<div class="noticiasalbums form">
<?php echo $this->Form->create('Noticiasalbum'); ?>
	<fieldset>
		<legend><?php echo __('Add Noticiasalbum'); ?></legend>
	<?php
		echo $this->Form->input('noticia_id');
		echo $this->Form->input('miniatura');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Noticiasalbums'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
