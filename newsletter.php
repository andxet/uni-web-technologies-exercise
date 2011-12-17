<?php
	global $errori;
	require_once("script/newsletter.php");
	if($_POST)
		if(isset($_POST["jsIsEnabled"]) && ($_POST["jsIsEnabled"] == "YES" || check($_POST))){
			//faiCose();
			header("Location: registrazione.php");
		}
?> 

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
        
            <h1>Newsletter</h1>
                
                <div id="errori">
              		<?php
              		function setPrecedenti($nome){
              		if(isset($_POST[$nome]))
                      	return $_POST[$nome];
                    else
                    	return;
                    }
              		
              		function isSelected($freq){
              			//global $_POST;
              			global $frequenza;
              			if($frequenza == '""')
              				$frequenza = "daily";
              			if (strcmp($frequenza, $freq) == 0)
              				return '"selected"';
              			else return "";
              		}
              		
              		function isChecked($focused){
              			//global $_POST;
              			global $tipo;
              			if($tipo == '""')
              				$tipo = "html";
              			if (strcmp($tipo, $focused) == 0)
              				return 'checked';
              			else
              				return "";
              		}
              		
              		if(!isset($_POST))
              			$_POST = array();
                    $nome = setPrecedenti('firstname'); 
                    $cognome = setPrecedenti('lastname');
                    $email = setPrecedenti('email');
                    $frequenza = setPrecedenti('frequency');
                    $tipo = setPrecedenti('type');
                    $commenti = setPrecedenti('comments');
                    //echo $nome.$cognome.$email.$frequenza.$tipo.$commenti;
                    echo $errori;
              		?>

                </div>
                <form method="post" name="modulo" action="newsletter.php">
            		<input type="hidden" name="jsIsEnabled" value="NO">
                    <fieldset>
                    <legend>User Details</legend>
                    <table style="border:0px;margin:0px;">  
                         <tr><td>Nome:* </td><td><input type="text" name="firstname" value=<?php echo '"'.$nome.'"'; ?>></td></tr>
                         <tr><td>Cognome:* </td><td><input type="text" name="lastname" value=<?php echo '"'.$cognome.'"'; ?>></td></tr>
                         <tr><td>E-mail:* </td><td><input type="text" name="email" value=<?php echo '"'.$email.'"'; ?>></td></tr>
                    </table>
                    * : Campi obbligatori.
                    </fieldset>
                    
                    <fieldset>
                        <legend>Preferenze</legend>
                        
                        <p>
                        Frequenza:
                        <select name="frequency">
                            <option <?php echo isSelected("daily"); ?> label="Giornaliero" value="daily">Giornaliero</option>
                            <option <?php echo isSelected("weekly"); ?> label="Settimanale" value="weekly">Settimanale</option>
                            <option <?php echo isSelected("monthly"); ?> label="Mensile" value="monthly">Mensile</option>
                        </select>
                        </p>
                        
                        <p>Formato:
                        <input name="type"
                               type="radio"
                               value="html"
                               <?php echo isChecked("html"); ?>>html
                        <input name="type"
                                type="radio"
                                value="text"
                                <?php echo isChecked("text"); ?>>testo
                        </p>
                    
                      <p>Scrivi un commento:</p>
            
                        <textarea name="comments"
                            rows="20" cols="50"
                            tabindex="40"><?php echo $commenti; ?></textarea>   
                        
            
                    <p>                        
                    <script type="text/javascript">
						<!--
							document.write('<button type="button" name="subscribe" value="subscribe" onclick="convalida();">');
  							document.write('Iscriviti!<img src="images/ok.gif" alt="subscribe_button_image"></button>');
						//  -->
					</script>
					<noscript>
						<button name="subscribe" value="subscribe" type="submit">
                        Subscribe<img src="images/ok.gif" alt="subscribe_button_image"></button>
					</noscript>
                    <script type="text/javascript">
						<!--
							document.write('<button type="button" name="cancella" onClick="conferma_eliminazione();">');
                        	document.write('Reset<img src="images/cancel.gif" alt="cancel_button_image"></button>');
                    	//  -->
                    </script>
                    <noscript>
                    	<button name="reset"><a href="newsletter.php">
                    	Reset<img src="images/cancel.gif" alt="cancel_button_image"></a></button>
                    </noscript>
                    </p>
            
            
                    </fieldset>
            
            
                </form>

        
        
            </div>
        
  		<div id="footer">
       		<p class="menu"><a href="http://wikipedia.org">Wikipedia</a>&nbsp;|&nbsp;<a href="http://www.acdc.com">Official Site</a>&nbsp;|&nbsp;<a href="mailto:schi@di.unito.it">Contact</a></p>
        </div>      
    	
  	</div>
    
    

   	


</body>
</html>
