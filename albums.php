<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
	<script src="script/menu.js" type="text/javascript"></script>
	<title>Albums</title>
	
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
            	<h3 onclick="menuToggle('Menu')"><img src="images/freccia-basso.png" alt="Menu espanso" name="frecciaMenu" />Menu</h3>
                <ul id="show">
                	<li><a href="index.html">Story</a></li>
                	<li><a href="albums.html">Albums</a></li>
                	<li><a href="newsletter.html">Newsletter</a></li>                    
                	<li><a href="photo.html">Galleria</a></li>
                </ul>
            
            </div>
            
            
            <div class="vnav">
            	 <h3 onclick="menuToggle('Lineup')"><img src="images/freccia-destra.png" alt="Menu compresso" name="frecciaLineup" />Lineup</h3>
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
        
        	<h1>Discography</h1>
    
                <table cellspacing="5" cellpadding="2">
                
                    <tr><th>Album</th><th>Year</th></tr>
                    <?php 
                    	require_once('script/DbConn.php');
                    	$result = getAlbums();
                    	$color = 0;/*
                    	$albums = mysql_fetch_array($result);
                    	print_r($albums);
                    	$albums = mysql_fetch_array($result);
                    	print_r($albums);*/
                    	for ($i = 0; $i < mysql_num_rows($result); $i++){
                    		$disco = mysql_fetch_array($result);
                    		$stringa = '<tr class="color';
                    		$stringa .= ($color++%2+1);
                    		$stringa .='"><td>';
                    		$stringa .= $disco['Nome'];
                    		$stringa .='</td><td>';
                    		$stringa .= $disco['Anno'];
                    		$stringa .= "</td></tr>\n";
                    		echo $stringa;
                    	}
                    ?>
                    <!--
                    <tr class="color1"><td>High Voltage</td><td>1975</td></tr>
                    <tr class="color2"><td>T.N.T.</td><td>1975</td></tr>
                    <tr class="color1"><td>High Voltage</td><td>1976</td></tr>
                    <tr class="color2"><td>Dirty Deeds Done Dirt Cheap</td><td>1976</td></tr>
                    <tr class="color1"><td>Let There Be Rock</td><td>1977</td></tr>
                    <tr class="color2"><td>Powerage</td><td>1978</td></tr>
                    <tr class="color1"><td>If You Want Blood You've Got It</td><td>1978</td></tr>
                    <tr class="color2"><td>Highway to Hell</td><td>1979</td></tr>
                    <tr class="color1"><td>Back in Black</td><td>1980</td></tr>
                    <tr class="color2"><td>For Those About to Rock We Salute You</td><td>1981</td></tr>
                    <tr class="color1"><td>Flick of the Switch</td><td>1983</td></tr>
                    <tr class="color2"><td>'74 Jailbreak</td><td>1984</td></tr>
                    <tr class="color1"><td>Fly on the Wall</td><td>1985</td></tr>
                    <tr class="color2"><td>Who Made Who</td><td>1986</td></tr>
                    <tr class="color1"><td>Blow Up Your Video</td><td>1988</td></tr>
                    <tr class="color2"><td>The Razors Edge</td><td>1990</td></tr>
                    <tr class="color1"><td>AC/DC Live</td><td>1992</td></tr>
                    <tr class="color2"><td>Ballbreaker</td><td>1995</td></tr>
                    <tr class="color1"><td>Stiff Upper Lip</td><td>2000</td></tr>
                    <tr class="color2"><td>Black Ice</td><td>2008</td></tr>
                    <tr class="color1"><td>AC/DC: Iron Man 2</td><td>2010</td></tr>        
                	-->
                </table>

        
        
            </div>
        
  		<div id="footer">
       		<p class="menu"><a href="http://wikipedia.org">Wikipedia</a>&nbsp;|&nbsp;<a href="http://www.acdc.com" >Official Site</a>&nbsp;|&nbsp;<a href="mailto:schi@di.unito.it">Contact</a></p>
        </div>      
    	
  	</div>
    
    
    
</body>

</html>
