<?php
	require_once("script/config.php");
	require_once($script_path."funzioni.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<script src="<?php echo $script_path; ?>menu.js" type="text/javascript"></script>
<script src="<?php echo $script_path; ?>galleria.js" type="text/javascript"></script>
   <title><?php printTitolo($_SERVER['PHP_SELF']); ?></title>
   
   <link rel="stylesheet" type="text/css" href="<?php echo $css_path; ?>style_layout.css" >
   
</head>


<body>
	
    <div id="container">
 
    	<div id="header">
    		<?php printHeader(); ?>
    	</div>
        
        <div id="navigation">
            
            <?php
            stampa_menu();
            ?>
            
            <div id="info">
            	<script type="text/javascript">
				<!--
					stampaInfoAlt();
				//  -->
				</script>
            </div>
            	
        </div>
        
        <div id="content">
        	<?php
        		require_once($script_path."photo.php");
        		
				$array_ext=array('.jpg','.jpeg','.gif');
				$arrayfoto=array();
				$arrayfoto=elencafiles($gallery_path,$array_ext);
				//echo $arrayfoto;
				if(!isset($arrayfoto))
					echo "<h2>Non esistono foto! </h2>";
        	?>
        	<script type="text/javascript">
				<!--
					<?php
						for ($i = 0; $i < count($arrayfoto); $i++)
							echo "addImage(\"$arrayfoto[$i]\", $i);\n";
					?>
        		//  -->
			</script>
			<noscript><h2>&egrave; necessaria l'attivazione di javascript.</h2></noscript>
        	<div id="immagineGrande">
        		<img src="<?php echo $gallery_path.$arrayfoto[0]; ?>" alt=<?php echo $arrayfoto[0]; ?> onclick="ingrandisci()" name="immaginona"/>
        	</div>
        	<div id="comandiFoto">
        		<a href="#" onclick="prev()"> Indietro </a> | <a href="#" onclick="next()"> Avanti </a> <a href="#" onclick="ingrandisci()"> Apri in un altra finestra</a>
        	</div>
        		<?php
        			$i = 0;
        			global $photoPerLine;
        			for (; $i < count($arrayfoto); $i++){
        			if($i%$photoPerLine == 0)
        				echo "<div id=\"elencoAnteprime\">";
        			if (!file_exists($miniature_path.$arrayfoto[$i])){
        				creaMiniatura($arrayfoto[$i]);
        			}
        				echo "<div>";
        				echo "<img src=\"$miniature_path$arrayfoto[$i]\" alt=\"$arrayfoto[$i]\" onclick=\"visualizza($i)\" name=\"miniatura$i\" class=\"anteprima\"/>";
        				echo "</div>\n";
        			if($i%$photoPerLine == $photoPerLine - 1)
        				echo "</div>";
        			}
        			if($i%$photoPerLine == $photoPerLine - 1)
        				echo "</div>";
        		?>
        </div>
        
  		<div id="footer">
       		<?php printFooter(); ?>
        </div>      
    	
    </div>
</body>
</html> 