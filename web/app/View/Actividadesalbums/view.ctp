<div class="actividadesalbums view">
<h2><?php  echo __('Actividadesalbum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividadesalbum['Actividadesalbum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Padrone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesalbum['Padrone']['id'], array('controller' => 'padrones', 'action' => 'view', $actividadesalbum['Padrone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miniatura'); ?></dt>
		<dd>
			<?php echo h($actividadesalbum['Actividadesalbum']['miniatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividadesalbum['Actividade']['id'], array('controller' => 'actividades', 'action' => 'view', $actividadesalbum['Actividade']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividadesalbum'), array('action' => 'edit', $actividadesalbum['Actividadesalbum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividadesalbum'), array('action' => 'delete', $actividadesalbum['Actividadesalbum']['id']), null, __('Are you sure you want to delete # %s?', $actividadesalbum['Actividadesalbum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividadesalbums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividadesalbum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Padrones'), array('controller' => 'padrones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Padrone'), array('controller' => 'padrones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
