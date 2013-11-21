<div class="legislaciontipos view">
<h2><?php  echo __('Legislaciontipo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legislaciontipo['Legislaciontipo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alcance'); ?></dt>
		<dd>
			<?php echo $this->Html->link($legislaciontipo['Alcance']['id'], array('controller' => 'alcances', 'action' => 'view', $legislaciontipo['Alcance']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($legislaciontipo['Legislaciontipo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legislaciontipo'), array('action' => 'edit', $legislaciontipo['Legislaciontipo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legislaciontipo'), array('action' => 'delete', $legislaciontipo['Legislaciontipo']['id']), null, __('Are you sure you want to delete # %s?', $legislaciontipo['Legislaciontipo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legislaciontipos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legislaciontipo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alcances'), array('controller' => 'alcances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alcance'), array('controller' => 'alcances', 'action' => 'add')); ?> </li>
	</ul>
</div>
