<?php
	require_once("script/config.php");
	require_once($script_path."funzioni.php");
	
	global $errori;
	require_once("script/newsletter.php");
	global $paginaControllo;
	global $paginaRegistrazione;
	$registrato = false;
	if($_POST)
		if(isset($_POST["jsIsEnabled"]) && ($_POST["jsIsEnabled"] == "YES" || check($_POST))){

			//faiCosePerLaRegistrazione();
			header("Location: registrazione.php?registration=successful");
		}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >
		<script src="<?php echo $script_path; ?>menu.js" type="text/javascript"></script>
		<script src="<?php echo $script_path; ?>newsletter.js" type="text/javascript"></script>
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
        
            <h1>Newsletter</h1>
                
                <div id="errori">

              		<?php 
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
       		<?php printFooter(); ?>
        </div>      
    	
    </div>
</body>
</html> 
