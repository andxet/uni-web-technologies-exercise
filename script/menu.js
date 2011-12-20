function menuToggle( menu ){
    
    var imgEspanso = "images/freccia-basso.png";
    var imgCompresso = "images/freccia-destra.png";
    
    var elementi;
    /*
    if(menu == "Menu")
    	elementi = document.getElementsByTagName("ul")[0];
    else if( menu == "Lineup")
    	elementi = document.getElementsByTagName("ul")[1];
    */
    elementi = document.getElementsByTagName("ul")[menu];
    var immagine = document.getElementsByName("freccia" + menu);

    
    if ( elementi && immagine) {
        if ( !elementi.id || elementi.id == 'show' ){
            elementi.id = 'hide';
            immagine[0].src = imgCompresso;
            immagine[0].alt = "Menu compresso";
            }
        else{
            elementi.id = 'show';
            immagine[0].src = imgEspanso;
            immagine[0].alt = "Menu espanso";
            }
    }
    
    return 0;
}

function stampaInfo(){
	today = new Date()
  	document.write(today.getDate(), today.getTime(), "<br />", window.navigator.appCodeName);
}

function stampaInfoAlt(){

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
}