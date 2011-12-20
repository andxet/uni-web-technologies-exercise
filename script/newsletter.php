<?php

	$paginaControllo = "newsletter.php";
	$paginaRegistrazione = "newsletter.php";

	function check($vect){
	global $nome; $nome = $vect['firstname'];
	$nomeName = "Nome";
	global $cognome; $cognome = $vect['lastname'];
	$cognomeName = "Cognome";
	global $mail; $mail = $vect['email'];
	$mailName = "eMail";
	global $commenti; $commenti = $vect['comments'];
	$commentiName = "Commenti";
	global $errori; $errori = "";
	
	$controllo = true;
	
	//Controllo se i campi sono stati riempiti
	$controllo = $controllo & isSetted($nome, $nomeName);
	$controllo = $controllo & isSetted($cognome, $cognomeName);
	
	//Controllo se i campi nome e cognome hanno lunghezza > 1
	$controllo = $controllo & isLong($nome, $nomeName);
	$controllo = $controllo & isLong($cognome, $cognomeName);
	
	//Controllo se i campi contengono caratteri proibiti
	$controllo = $controllo & !hasProhibitedChars($nome, $nomeName);
	$controllo = $controllo & !hasProhibitedChars($cognome, $cognomeName);
	$controllo = $controllo & !hasProhibitedChars($commenti, $commentiName);
	
	//controllo se l'e-mail è valida
	$controllo = $controllo & isMail($mail);
	return $controllo;
}

function isSetted($campo, $nomeCampo){
	global $errori;
	if (($campo == "") || ($campo == null)) {
	   $errori = $errori.'Il campo <strong>'.$nomeCampo.'</strong> &egrave; obbligatorio.<br />';
	   return false;}
	else
		return true;
}

function isMail($mail){
	global $errori;
	$email_reg_exp = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/';
	if (($mail == "") || ($mail == null)) {
		$errori = $errori."Il campo <strong>e-Mail</strong> &egrave; obbligatorio.<br />";
		return false;
		}
	else if(!preg_match($email_reg_exp, $mail)){
   		$errori = $errori."Inserire un indirizzo <strong>e-Mail</strong> corretto.<br />";
   		return false;
	}
	else
		return true;
}

function hasProhibitedChars($campo, $nomeCampo){
	global $errori;
	if((strpos($campo, '|') === false) &&
		(strpos($campo, '+') === false) &&
		(strpos($campo, '--') === false) &&
		(strpos($campo, '=') === false) &&
		(strpos($campo, '<') === false) &&
		(strpos($campo, '>') === false) &&
		(strpos($campo, '!=') === false) &&
		(strpos($campo, '(') === false) &&
		(strpos($campo, ')') === false) &&
		(strpos($campo, '%') === false) &&
		(strpos($campo, '@') === false) &&
		(strpos($campo, '#') === false) &&
		(strpos($campo, '*') === false)){
			return false;
		}
	else{
		$errori = $errori.'Il campo <strong>'.$nomeCampo.'</strong> non pu&ograve; contenere i caratteri |, +, --, =, <, >, !=, (, ), %, @, #, *.<br />';
		return true;
		}		
}

function stringInString($stringa1, $stringa2){
	
}

function isLong($campo, $nomeCampo){
	global $errori;
	if (strlen($campo) == 1) {
   		$errori = $errori."Il campo <strong>".$nomeCampo."</strong> deve avere pi&ugrave; di un carattere.\n<br />";
   		return false;}
	else
		return true;
}

function makeUrl($vett){
global $errori;
return "newsletter.php?firstname=".$vett['firstname']."&lastname=".$vett['lastname']."&email=".$vett['email']."&frequency=".$vett['frequency']."&type=".$vett['type']."&comments=".$vett['comments']."&errori=".$errori;
}

function setPrecedenti($nome){
	if(isset($_POST[$nome]))
  		return $_POST[$nome];
	else
		return null;
}
	
function isSelected($freq){
	//global $_POST;
	global $frequenza;
	if($frequenza == '""')
		$frequenza = "daily";
	if (strcmp($frequenza, $freq) == 0)
		return 'selected';
	else return "";
}
	
function isChecked($focused){
	//global $_POST;
	global $tipo;
	if($tipo == null)
		$tipo = "html";
	if (strcmp($tipo, $focused) == 0)
		return 'checked';
	else
		return "";
}


?>