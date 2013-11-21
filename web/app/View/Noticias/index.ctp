<div class="capacitaciones_title">
	<p class="capacitaciones_title_central">
		<?php
			switch ($id) {
				case 1:
					echo 'Capacitación en Asistencia Pre-hospitalaria';	
				break;
				case 2:
					echo 'Materiales Peligrosos';	
				break;
				case 3:
					echo 'Formación de Brigadas Industriales';	
				break;
			}
		?>
	</p>
</div>
<div class="capacitacion_body">
	<div class="capacitacion_central">
		<div class="capacitacion_arriba">
			<div class="accordion">
				<?php foreach ($capacitaciones as $capacitacion): ?>
			  <div class="accord-header">
			  	<div class="diploma_certificacion">
			  		<?php echo $this->Html->image('capacitaciones/diploma.png');?>
			  	</div>
			  	<div class="text_accordion_header">
				  	<p class="titulo_accordion"> <?php echo $capacitacion['Capacitacione']['titulo']?></p>
				  	<p class="short_desc_accordion">
				  	<?php echo $capacitacion['Capacitacione']['descripcion']?></p>
				</div>  
			  	<div class="desplegar_capacitacion"></div>
			  </div>
			  <div class="accord-content">
			  	<?php 
				  	if (!empty($capacitacion['Capacitacione']['foto1']))
				  	{
				  		echo $this->Html->image('capacitaciones/'.$capacitacion['Capacitacione']['foto1']);
				  	}
				  	if (!empty($capacitacion['Capacitacione']['foto2']))
				  	{
				  		echo $this->Html->image('capacitaciones/'.$capacitacion['Capacitacione']['foto2']);
				  	}
				  	if (!empty($capacitacion['Capacitacione']['foto3']))
				  	{
				  		echo $this->Html->image('capacitaciones/'.$capacitacion['Capacitacione']['foto3']);
				}?>
				  	<br />
					<?php echo $capacitacion['Capacitacione']['texto']?>
			  </div>
			  <?php endforeach; ?>
			</div>
			<div class="imagenes_capacitacion">
				<?php echo $this->Html->image('capacitaciones/sponsors_capacitaciones.jpg',array('id'=>'img_sponsors_capacitaciones'));?>
				<?php echo $this->Html->image('capacitaciones/capacitaciones'.$id.'.jpg',array('id'=>'img_categoria_capacitacion'));?>
			</div>
		</div>
		<div class="capacitacion_abajo">
			<?php echo $this->Html->image('capacitaciones/abajo'.$id.'.jpg');?>
		</div>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".accordion .accord-header").click(function() {
      if($(this).next("div").is(":visible")){
        $(this).next("div").slideUp("slow");
      } else {
        $(".accordion .accord-content").slideUp("slow");
        $(this).next("div").slideToggle("slow");
      }
    });
  });
</script>