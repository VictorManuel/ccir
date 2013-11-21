<div class="noticiasalbums view">
<h2><?php  echo __('Noticiasalbum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($noticiasalbum['Noticiasalbum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noticia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($noticiasalbum['Noticia']['id'], array('controller' => 'noticias', 'action' => 'view', $noticiasalbum['Noticia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Miniatura'); ?></dt>
		<dd>
			<?php echo h($noticiasalbum['Noticiasalbum']['miniatura']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Noticiasalbum'), array('action' => 'edit', $noticiasalbum['Noticiasalbum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Noticiasalbum'), array('action' => 'delete', $noticiasalbum['Noticiasalbum']['id']), null, __('Are you sure you want to delete # %s?', $noticiasalbum['Noticiasalbum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticiasalbums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticiasalbum'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Noticias'), array('controller' => 'noticias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Noticia'), array('controller' => 'noticias', 'action' => 'add')); ?> </li>
	</ul>
</div>
