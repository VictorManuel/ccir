<div class="legislaciones view">
<h2><?php  echo __('Legislacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Legislaciontipo Id'); ?></dt>
		<dd>
			<?php echo h($legislacione['Legislacione']['legislaciontipo_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Legislacione'), array('action' => 'edit', $legislacione['Legislacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Legislacione'), array('action' => 'delete', $legislacione['Legislacione']['id']), null, __('Are you sure you want to delete # %s?', $legislacione['Legislacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Legislaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Legislacione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
