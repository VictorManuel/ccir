<?php
class FilerComponent extends Object {
	public $components = array('Session');
	public $controller = null;
	public function initialize($controller) {
		$this->controller = $controller;
	}
	public function startup(){}
	public function beforeRender(){}
	public function shutdown(){}
	public function beforeRedirect(){}

	function upload($file_array,$name_def="",$path="uploads"){
		debug($file_array);
	  if( !$file_array['name'] ) return $name_def;
	  if($name_def) unlink(WWW_ROOT.substr($name_def,1));
	  $file = new File($file_array['tmp_name']);
	  if( $file->size() > 17825790 ) {
	   return("");
	  }
	  $file_base = pathinfo($file_array['name']);
	  $ext = strtolower($file_base['extension']);
	  if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'png' && $ext != 'pdf') {
	  return("");
	  }
	  else {
	   $data = $file->read();
	   $file->close();
	   $full_path = "/$path/".uniqid().".$ext";
	   $file = new File(WWW_ROOT.$full_path, true);
	   $file->write($data);
	   $file->close();
	   return $full_path;
	  }
	  return "";
	 }

	public function redimensionar($img, $width, $height){
		//header('Content-Disposition: Attachment;filename=image.png'); 
		//header('Content-type: image/png');
		//Ruta de la original
		$rtOriginal=substr($img,1);	
		$max_ancho = $width;
		$max_alto = $height;

		$format = getimagesize($rtOriginal);
		$format = $format[2];
		//Crear variable de imagen a partir de la original
		if ($format == '2')
		{
			$original = imagecreatefromjpeg($rtOriginal);
		}
		elseif ($format == '3')
		{
			$original = imagecreatefrompng($rtOriginal);
		}
		elseif ($format == '1')
		{
			$original = imagecreatefromgif($rtOriginal);
		}
		
		//Recoger ancho y alto de la original
		list($ancho,$alto)=getimagesize($rtOriginal);
		 
		//Calcular proporción ancho y alto
		$x_ratio = $max_ancho / $ancho;
		$y_ratio = $max_alto / $alto;
		//Con esto ya tenemos los datos para mantener las proporciones de la imagen. Ahora toca calcular el tamaño:

		if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){
		//Si es más pequeña que el máximo no redimensionamos
		    $ancho_final = $ancho;
		    $alto_final = $alto;
		}
		//si no calculamos si es más alta o más ancha y redimensionamos
		elseif (($x_ratio * $alto) < $max_alto){
		    $alto_final = ceil($x_ratio * $alto);
		    $ancho_final = $max_ancho;
		}
		else{
		    $ancho_final = ceil($y_ratio * $ancho);
		    $alto_final = $max_alto;
		}
		//Con esto ya tenemos el tamaño de la imagen con las proporciones guardadas. Finalmente nos queda crear la imagen y guardarla:

		//Crear lienzo en blanco con proporciones
		$lienzo=imagecreatetruecolor($ancho_final,$alto_final); 
		 
		//Copiar $original sobre la imagen que acabamos de crear en blanco ($tmp)
		imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
		 
		//Limpiar memoria
		imagedestroy($original);
		 
		//Definimos la calidad de la imagen final
		$cal=90;
		 
		//Borro la original y se crea la imagen final en el directorio indicado

		unlink($rtOriginal);
		if (imagejpeg($lienzo,$rtOriginal,$cal))
		{
			return(true);
		}
		else
		{
			return(false);
		}
	}
}
?>