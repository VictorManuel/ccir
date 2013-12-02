 <div id="main" class="portofolio">
   
    <div class="breadcrumb clearfix">
     <span class="base">You are here</span>
     <p><a href="index.html">Home</a>&nbsp;&nbsp;&rarr;&nbsp;&nbsp;Portofolio 4 Columns</p>
    </div> <!-- End Breadcrumb -->
  
    <div class="row-fluid margin-top40">
    
     <ul class="portofolio-filter">
      <li><a href="#" class="current active" data-filter="*">All</a></li>
      <li><a href="#" data-filter=".web-design">Web Design</a></li>
      <li><a href="#" data-filter=".typography">Typography</a></li>
      <li><a href="#" data-filter=".design-inspiration">Design Inspiration</a></li>
      <li><a href="#" data-filter=".wordpress">Wordpress</a></li>
     </ul> <!-- End Portofolio-Filter -->
     
     <div class="portofolio-items">
     
     	<?php foreach ($legislaciones as $legislacione): ?>
			<div class="span3 item web-design wordpress"> <!-- One -->
				<figure class="figure-overlay">
					<a href="single_portofolio.html" title="View more detail about this project">
					 	<img src="images/content/300/1.jpg" alt="Thumbnail 1" />
						<div><p><?php echo $legislacione['Legislacione']['titulo']; ?></p></div>
					</a>
				</figure>
				<p>Fecha: <i><?php echo h($legislacione['Legislacione']['fecha']); ?></i>. <?php echo h($legislacione['Legislacione']['descripcion']); ?></p>
			</div>
     	<?php endforeach; ?>
     </div> <!-- End Portofolio-Items -->
   
    </div> <!-- End Row-Fluid -->
   </div> <!-- End Main -->