<div class="autoridades view">
<h2><?php  echo __('Autoridade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($autoridade['Autoridade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($autoridade['Autoridade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($autoridade['Autoridade']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($autoridade['Autoridade']['foto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Autoridade'), array('action' => 'edit', $autoridade['Autoridade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Autoridade'), array('action' => 'delete', $autoridade['Autoridade']['id']), null, __('Are you sure you want to delete # %s?', $autoridade['Autoridade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Autoridades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Autoridade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
