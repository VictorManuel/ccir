<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		CCIR
	</title>

	 <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php
		echo $this->Html->meta('icon');
		ECHO $this->Html->meta(array('description'=>'Sitio web de la Cámara de Comercio e Industria de la Ciudad de Rawson','keywords'=>'cámara de comercio, rawson, comerciantes, industria','author'=>'Alumnos del Juan XXIII'));
		//AGREGAR LOS METAS CORRESPONDIENTES
		echo $this->Html->css(array('bootstrap.min','bootstrap-responsive.min','flexslider','prettyPhoto','style','color','theme-layout'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<noscript><link rel="stylesheet" href="css/no-js.css"></noscript> <!-- Si el JavaScript está desabilitado -->
	 <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo $this->Html->script(array('jquery-1.8.3.min','bootstrap.min','jquery.easing','jquery.flexslider-min','jflickrfeed.min','jquery.fitvids.min','jquery.lazyload.mini','jquery.prettyPhoto','jquery.placeholder.min','jquery.jticker','jquery.mobilemenu','jquery.isotope.min','jquery.hoverdir','modernizr.custom','main')); ?>
</head>
<!--<body>

		<div id="content">

			<?php// echo $this->Session->flash(); ?>

			<?php //echo $this->fetch('content'); ?>
		</div>
		
</body>
</html>-->
<body>
 <div class="theme-layout"> <!-- Stretched/Boxed Layout -->
  <div class="container">
  <header id="header" class="clearfix">
   <!-- Logo -->
   <div class="logo pull-left">
    <a href="index.html"><?php echo $this->Html->image('logo.jpg',array('alt'=>'Enews'));?></a>
   </div>
   <!-- Ads -->
   <div class="ads pull-right">
    <?php echo $this->Html->image('ads/480x80.png',array('alt'=>'Ads')); ?>
  </div>
  </header> <!-- End Header -->
  <nav id="main-navigation" class="clearfix">
   <ul>
    <li><?php echo $this->Html->link('Inicio','/');?></li>
    <li><a href="#">Institucional <i class="arrow-main-nav"></i></a>
     <ul>
      <li><?php echo $this->Html->link('Padrón','/padrones');?></li>
      <li><a href="blog_posts.html">Autoridades</a></li>
      <li><a href="blog_posts.html">Actas de directorio</a></li>
     </ul>
    </li>
    <li><a href="blog_posts.html">Contacto</a></li>
    <li><a href="blog_posts.html">Noticias</a>
    <li><a href="blog_posts.html">Circulares</a>
    </li>
    <li><a href="blog_photos.html">Albums <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="single_photo.html">Actividad<i class="arrow-main-nav"></i></a>
        <ul>
          <li><a href="single_photo.html">Comercio</a></li>
          <li><a href="single_photo.html">Producción</a></li>
          <li><a href="single_photo.html">Industria</a></li>
        </ul>
      </li>
      <li><a href="single_photo.html">Noticias</a></li>
     </ul>
    </li>
    <li><a href="blog_videos.html">Legislación <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="single_video.html">Local<i class="arrow-main-nav"></i></a>
        <ul>
          <li><a href="single_photo.html">Ordenanzas</a></li>
          <li><a href="single_photo.html">Resoluciones Municipales</a></li>
          <li><a href="single_photo.html">Varios</a></li>
        </ul>
      </li>
      <li><a href="single_photo.html">Provincial<i class="arrow-main-nav"></i></a>
        <ul>
          <li><a href="single_photo.html">Decretos provinciales</a></li>
          <li><a href="single_photo.html">Resoluciones Provinciales</a></li>
        </ul>
      </li>
      <li><a href="single_photo.html">Nacional<i class="arrow-main-nav"></i></a>
        <ul>
          <li><a href="single_photo.html">Disposiciones nacionales</a></li>
          <li><a href="single_photo.html">Resoluciones nacionales</a></li>
          <li><a href="single_photo.html">Decretos nacionales</a></li>
          <li><a href="single_photo.html">Leyes nacionales</a></li>
        </ul>
      </li>
      </li>
     </ul>
    </li>
   </ul>
  </nav> <!-- End Main-Navigation -->
  <div id="highlight-posts" class="clearfix">
   <ul>
    <li class="masked masked-big"> <!-- One -->
     <div class="flexslider highlight-one loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(img/content/full/5.jpg);"></figure></li>
       <li><figure style="background-image:url(img/content/full/4.jpg);"></figure></li>
       <li><figure style="background-image:url(img/content/full/9.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Alvear Art Black and White Theme"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-violet"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Alvear Art Black and White Theme</h2>
      <span class="meta">By mdkiwol on Jan. 14, 2013</span>
      <p>Suspendisse ornare luctus tempus. Nulla nec orci erat, sed consequat lacus. Curabitur vel odio eu sapien fermentum placerat pharetra ac lectus. Ut erat sapien, lobortis nec mattis eget, tempus sit amet elit. Duis gravida tincidunt fermentum. Etiam metus lectus, facilisis non imperdiet sit amet, fermentum vitae leo [...]</p>
     </div>
    </li>
    <li class="masked masked-small"> <!-- Two -->
     <div class="flexslider highlight-two loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(img/content/600/11.jpg);"></figure></li>
       <li><figure style="background-image:url(img/content/600/2.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Camerette - Your Time to Explore"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-red"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Camerette - Your Time to Explore</h2>
      <span class="meta">By jagerjack on Jan. 13, 2013</span>
     </div> 
    </li>
    <li class="masked masked-small"> <!-- Three -->
     <div class="flexslider highlight-three loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(img/content/600/3.jpg);"></figure></li>
       <li><figure style="background-image:url(img/content/600/1.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Living room in Italy"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-blue"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Living room in Italy</h2>
      <span class="meta">By amaah on Jan. 12, 2013</span>
     </div> 
    </li>
    <li class="masked masked-small no-margin-bottom"> <!-- Four -->
     <div class="flexslider highlight-four loading">
      <ul class="slides"> <!-- Images -->
       <li><figure style="background-image:url(img/content/600/8.jpg);"></figure></li>
       <li><figure style="background-image:url(img/content/600/7.jpg);"></figure></li>
       <li><figure style="background-image:url(img/content/600/6.jpg);"></figure></li>
      </ul>
     </div>
     <a href="single_post.html" title="View permalink Mosaic Pool is Amazing And Beautiful Place"><div class="masked-hover"></div></a> <!-- Masked Hover -->
     <div class="masked-base"></div> <!-- Masked Base -->
     <div class="masked-color masked-orange"></div> <!-- Masked Color -->
     <div class="text">
      <h2>Mosaic Pool is Amazing And Beautiful Place</h2>
      <span class="meta">By john on Jan. 11, 2013</span>
     </div> 
    </li>
   </ul>
  </div> <!-- End Highlight Posts -->
  <div class="row-fluid">
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->fetch('content'); ?>
  </div> <!-- End Row-Fluid -->
 </div> <!-- End Container -->
 <div id="footer">
  <div class="container">
   <p class="pull-left">Copyright 2013 Dots Theme&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Dots Theme</a></p>
   <ul class="social pull-right">
    <li><a href="#" title="Youtube"><?php echo $this->Html->image('social/f0101/youtube.png',array('alt'=>'Youtube')); ?></a></li>
    <li><a href="#" title="LinkedIn"><?php echo $this->Html->image('social/f0101/linkedin.png',array('alt'=>'LinkedIn')); ?></a></li>
    <li><a href="#" title="Vimeo"><?php echo $this->Html->image('social/f0101/vimeo.png',array('alt'=>'Vimeo')); ?></a></li>
    <li><a href="#" title="Tumblr"><?php echo $this->Html->image('social/f0101/tumblr.png',array('alt'=>'Tumblr')); ?></a></li>
    <li><a href="#" title="Flickr"><?php echo $this->Html->image('social/f0101/flickr.png',array('alt'=>'Flickr')); ?></a></li>
    <li><a href="#" title="DeviantArt"><?php echo $this->Html->image('social/f0101/deviantart.png',array('alt'=>'DeviantArt')); ?></a></li>
    <li><a href="#" title="Delicious"><?php echo $this->Html->image('social/f0101/delicious.png',array('alt'=>'Delicious')); ?></a></li>
    <li><a href="#" title="Facebook"><?php echo $this->Html->image('social/f0101/facebook.png',array('alt'=>'Facebook')); ?></a></li>
    <li><a href="#" title="Twitter"><?php echo $this->Html->image('social/f0101/twitter.png',array('alt'=>'Twitter')); ?></a></li>
   </ul>
  </div> <!-- End Container -->
 </div> <!-- End Footer -->
 </div> <!-- End Theme-Layout -->
 <a href="#" class="scrollup" title="Back to Top!">Scroll</a>
</body>
</html>