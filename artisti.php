<?php
	require_once("script/config.php");
	require_once($script_path."funzioni.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
<script src="<?php echo $script_path; ?>menu.js" type="text/javascript"></script>
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
        		global $artisti_path;
        		if(!isset($_GET['artista']))
        			if(file_exists($pagina = $artisti_path."angus.html"))
        				include($pagina);
        			else echo "<h2>Pagina non trovata!</h2>";
        		else
        			if(file_exists($pagina = $artisti_path.$_GET['artista'].".html"))
        				include($pagina);
        			else
        				echo "<h2>Pagina non trovata!</h2>";
        	?>
        </div>
        
  		<div id="footer">
       		<?php printFooter(); ?>
        </div>      
    	
    </div>
</body>
</html> 