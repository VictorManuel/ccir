<div class="noticias form">
<?php echo $this->Form->create('Noticia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Noticia'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Noticia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Noticia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticiasalbums'), array('controller' => 'noticiasalbums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticiasalbum'), array('controller' => 'noticiasalbums', 'action' => 'add')); ?> </li>
	</ul>
</div>
