var errori;
var nome;
var cognome;
var mail;
var commenti;
var email_reg_exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-zA-Z0-9]{2,})+$/;

function check(){

	errori = "";
	nome = document.modulo.firstname;
	cognome = document.modulo.lastname;
	mail = document.modulo.email;
	commenti = document.modulo.comments;
	
	var controllo = true;
	
	//Controllo se i campi sono stati riempiti
	controllo = controllo & isSet(nome.value, "Nome");
	controllo = controllo & isSet(cognome.value, "Cognome");
	
	//Controllo se i campi nome e cognome hanno lunghezza > 1
	controllo = controllo & isLong(nome.value, "Nome");
	controllo = controllo & isLong(cognome.value, "Cognome");
	
	//Controllo se i campi contengono caratteri proibiti
	controllo = controllo & !hasProhibitedChars(nome.value, "Nome");
	controllo = controllo & !hasProhibitedChars(cognome.value, "Cognome");
	controllo = controllo & !hasProhibitedChars(commenti.value, "Commenti");
	
	//controllo se l'e-mail è valida
	controllo = controllo & isMail(mail.value);
	showErrors();
	return controllo;
}

function isSet(campo, nomeCampo){
	if ((campo == "") || (campo == "undefined")) {
	   errori = errori + "Il campo <strong>" + nomeCampo + "</strong> &egrave; obbligatorio.\n<br />";
	   return false;}
	else
		return true;
}

function isMail(mail){
	if ((mail == "") || (mail == "undefined")) {
		errori = errori + "Il campo <strong>e-Mail</strong> &egrave; obbligatorio.<br />";
		return false;
		}
	else if(!email_reg_exp.test(mail)){
   		errori = errori + "Inserire un indirizzo <strong>e-Mail</strong> corretto.<br />";
   		return false;
	}
	else
		return true;
}

function hasProhibitedChars(campo, nomeCampo){
	if((campo.indexOf("|") == -1) &&
		(campo.indexOf("+") == -1) &&
		(campo.indexOf("--") == -1) &&
		(campo.indexOf("=") == -1) &&
		(campo.indexOf("<") == -1) &&
		(campo.indexOf(">") == -1) &&
		(campo.indexOf("!=") == -1) &&
		(campo.indexOf("(") == -1) &&
		(campo.indexOf(")") == -1) &&
		(campo.indexOf("%") == -1) &&
		(campo.indexOf("@") == -1) &&
		(campo.indexOf("#") == -1) &&
		(campo.indexOf("*") == -1)){
			return false;
		}
	else{
		errori = errori + "Il campo <strong>" + nomeCampo + "</strong> non pu&ograve; contenere i caratteri |, +, --, =, <, >, !=, (, ), %, @, #, *.<br />";
		return true;
		}		
}

function convalida(){
	if(check()){
			document.modulo.jsIsEnabled.value="YES";
			document.modulo.action = "registrazione.php" ;
			document.modulo.submit();
        }
    else return false;        
}

function showErrors(){
	document.getElementById("errori").innerHTML= errori;
}

function isLong(campo, nomeCampo){
	if (campo.length == 1) {
   		errori = errori + "Il campo <strong>" + nomeCampo + "</strong> deve avere pi&ugrave; di un carattere.\n<br />";
   		return false;}
	else
		return true;
}

function conferma_eliminazione() { 
	conferma = confirm("Sei sicuro di voler cancellare tutto il contenuto del form?"); 
	if (conferma) 
	{ 
		document.modulo.reset(); 
	} 
} 