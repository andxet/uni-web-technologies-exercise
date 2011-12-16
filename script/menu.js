function menuToggle( menu ){
    
    var imgEspanso = "images/freccia-basso.png";
    var imgCompresso = "images/freccia-destra.png";
    
    var elementi;
    
    if(menu == "Menu")
    	elementi = document.getElementsByTagName("ul")[0];
    else if( menu == "Lineup")
    	elementi = document.getElementsByTagName("ul")[1];
    
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