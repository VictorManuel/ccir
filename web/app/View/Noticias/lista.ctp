<div class="capacitaciones index">
	<h2><?php echo __('Noticias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo','Título'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_id','Categoría'); ?></th>
			<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php foreach ($noticias as $noticia): ?>
	<tr>
		<td><?php echo gmdate("d-m-Y",strtotime($noticia['Noticia']['fecha'])); ?>&nbsp;</td>
		<td><?php echo h($noticia['Noticia']['titulo']); ?>&nbsp;</td>
		<td>
			<?php echo $noticia['Categoria']['nombre']; ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $noticia['Noticia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $noticia['Noticia']['id']), null, __('¿Estás seguro que deseas eliminar %s?', $noticia['Noticia']['titulo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>