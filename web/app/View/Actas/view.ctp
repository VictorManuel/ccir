<div class="actas view">
<h2><?php  echo __('Acta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($acta['Acta']['documento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acta'), array('action' => 'edit', $acta['Acta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acta'), array('action' => 'delete', $acta['Acta']['id']), null, __('Are you sure you want to delete # %s?', $acta['Acta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('action' => 'add')); ?> </li>
	</ul>
</div>
