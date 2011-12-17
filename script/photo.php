<?php
	define("DIR_IMMAGINI", "./gallery");
	$formati_immagine = array(".jpg", ".gif", ".png", ".jpeg");

function elencafiles($dirname,$arrayext){
	$arrayfiles=Array();
	if(file_exists($dirname)){
		$handle = opendir($dirname);
		while (false !== ($file = readdir($handle))) { 
			if(is_file($dirname.$file)){
				$ext = strtolower(substr($file, strrpos($file, "."), strlen($file)-strrpos($file, ".")));
				if(in_array($ext,$arrayext)){
					array_push($arrayfiles,$file);
				}
			}
		}
		$handle = closedir($handle);
	}
	sort($arrayfiles);
	return $arrayfiles;
}

/*
// dati di configurazione
  define("DIR_IMMAGINI", "./gallery");
  $formati_immagine = array(".jpg", ".gif", ".png", ".jpeg");
  $tipi_immagine = array("image/jpeg", "image/gif", "image/
   png");

// funzione che effettua il caricamento dei file presenti nella directory $dir, che soddifano l'espressione regolare $formati
function caricaDirectory($dir) {
  $dh = opendir($dir) or die("Errore nell'apertura della directory ". $dir);
  $contenuto = array();
  while (($file = readdir($dh)) != FALSE)
    if (!is_dir($file) && controllaFormato($file))
      $contenuto[] = $file;
  closedir($dh);
  return $contenuto;
}

// funzione che genera un link verso l'immagine con indice $indice_immagine e testo specificato in $testo_link
function generaLinkImmagine($indice_immagine, $file) {
  return "<a href=\"visualizza.php?immagine=".$indice_immagine."\">"."<img src=\"".DIR_IMMAGINI."/".$file."\" width=\"80\" height = \"60\"/>"."</a>";
}

function generaLinkTestuale($indice_immagine, $testo = "") {
 return "<a href=\"visualizza.php?immagine=".$indice_immagine."\">".$testo."</a>";
}
*/
?>