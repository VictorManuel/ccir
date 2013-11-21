<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<?php if($this->Session->read('Auth.User.nivele_id')=='1'){	?>
		<li><h4>Usuarios</h4></li>
		<li><?php echo $this->Html->link(__('Usuarios'), array('controller'=>'users','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nuevo usuario'), array('controller'=>'users','action' => 'add')); ?></li>
		<?php } ?>
		<li><h4>Noticias</h4></li>
		<li><?php echo $this->Html->link(__('Noticias'), array('controller'=>'noticias','action' => 'lista')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Notica'), array('controller'=>'noticias','action' => 'add')); ?></li>
		<li><h4>------------------</h4></li>
		<li><?php echo $this->Html->link(__('Salir'), array('controller' => 'users', 'action' => 'logout')); ?></li>
	</ul>
</div>