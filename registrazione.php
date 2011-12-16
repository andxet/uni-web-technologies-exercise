<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="script/menu.js" type="text/javascript"></script>
<script src="script/newsletter.js" type="text/javascript"></script>
<title>Newsletter</title>

<link rel="stylesheet" type="text/css" href="css/style_layout.css" >

</head>

<body>

	<div id="container">
 
    	<div id="header">
    		<img src="images/acdc_logo_band.png" height="100px" alt="Logo ACDC">
        	<h3>It's a long way to the top (if you wanna rock'n roll)</h3>
    	</div>
        
        <div id="navigation">
            
            <div class="vnav">
            	<h3 onclick="menuToggle('Menu')" ><img src="images/freccia-basso.png" alt="Menu espanso"name="frecciaMenu" />Menu</h3>
                <ul id="show">
                	<li><a href="index.html">Story</a></li>
                	<li><a href="albums.html">Albums</a></li>
                	<li><a href="newsletter.html">Newsletter</a></li>                    
                	<li><a href="photo.html">Galleria</a></li>
                </ul>
            
            </div>
            
            
            <div class="vnav">
            	 <h3 onclick="menuToggle('Lineup')" ><img src="images/freccia-destra.png" alt="Menu compresso" name="frecciaLineup" />Lineup</h3>
                 <ul id="hide">
                    <li><a href="brian.html">Brian Johnson</a></li>
                    <li><a href="angus.html">Angus Young</a></li>
                    <li><a href="malcolm.html">Malcolm Young</a></li>
                    <li><a href="phil.html">Phil Rudd</a></li>
                </ul>
            </div>
            <div id="info">
            	<script type="text/javascript">
				<!--
					data = new Date();
					ora =data.getHours();
					minuti=data.getMinutes();
					secondi=data.getSeconds();
					giorno = data.getDate();
					mese = data.getMonth() + 1;
					year= data.getFullYear();
					if(minuti< 10)minuti="0"+minuti;
					if(secondi< 10)secondi="0"+secondi;
					if(ora<10)ora="0"+ora;
					document.write(giorno+"/"+mese+"/"+year+" - "+ora+":"+minuti+":"+secondi);
  					document.write("<br />", window.navigator.appCodeName, "<br />", window.navigator.platform);
				//  -->
				</script>
            </div>
            	
        </div>
        
        <div id="content">
        	<?php
        		global $errori;
        		require_once("script/newsletter.php");
        		if(check($_POST))
        			echo "<h2> Registrazione completata! </h2>";
        			}
        		else{
        			$indirizzo = makeUrl($_POST);
        			echo "<h2> Il form contiene degli errori.</h2> <br /> $errori <br /><a href="'.$indirizzo.'"> Indietro </a>";
        			}
        	?>  
        </div>
  		<div id="footer">
       		<p class="menu"><a href="http://wikipedia.org">Wikipedia</a>&nbsp;|&nbsp;<a href="http://www.acdc.com">Official Site</a>&nbsp;|&nbsp;<a href="mailto:schi@di.unito.it">Contact</a></p>
        </div>      
    	
  	</div>
    
    

   	


</body>
</html>
