<?php echo $this->Html->script('tinymce/tinymce.min');?>
<script type="text/javascript">
	 tinymce.init({
	 	selector:'textarea',
	 /*	menu: { 
	        edit: {title: 'Edit', items: 'undo redo | cut copy paste | selectall'}, 
	        insert: {title: 'Insert', items: '|'}, 
	        view: {title: 'View', items: 'visualaid'}, 
	        format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'}, 
	        table: {title: 'Table'}, 
	        tools: {title: 'Tools'} 
	    },*/
	    language : 'es'
	 });
</script>
<div class="capacitaciones form">
<?php echo $this->Form->create('Noticia',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar noticia'); ?></legend>
	<?php
		echo $this->Form->input('titulo',array('label'=>'Título'));
		echo $this->Form->input('texto',array('required'=>false,'height'=>500));
		echo $this->Form->input('categoria_id',array('label'=>'categoría'));
		$meses = array( 
			'01'=>'Enero',
			'02'=>'Febrero',
			'03'=>'Marzo',
			'04'=>'Abril',
			'05'=>'Mayo',
			'06'=>'Junio',
			'07'=>'Julio',
			'08'=>'Agosto',
			'09'=>'Septiembre',
			'10'=>'Octubre',
			'11'=>'Noviembre',
			'12'=>'Diciembre');
			echo $this->Form->input('fecha',array('dateFormat' => 'DMY','monthNames' => $meses));
			echo $this->Form->input('portada',array('label'=>'Portada','type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>