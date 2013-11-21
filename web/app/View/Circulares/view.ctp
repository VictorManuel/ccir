<div class="circulares view">
<h2><?php  echo __('Circulare'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($circulare['Circulare']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($circulare['Circulare']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenido'); ?></dt>
		<dd>
			<?php echo h($circulare['Circulare']['contenido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($circulare['Circulare']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($circulare['User']['id'], array('controller' => 'users', 'action' => 'view', $circulare['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Circulare'), array('action' => 'edit', $circulare['Circulare']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Circulare'), array('action' => 'delete', $circulare['Circulare']['id']), null, __('Are you sure you want to delete # %s?', $circulare['Circulare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Circulares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Circulare'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
