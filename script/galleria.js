var immagini = new Array();
immagini[0] = "acdc_2.jpg";
immagini[1] = "acdc_3.jpg";
immagini[2] = "acdc_wallpaper.jpg";
immagini[3] = "acdc-let_there_be_rock-frontal.jpg";
immagini[4] = "ACDC-Who_Made_Who-Frontal.jpg";
immagini[5] = "acdc20_1024x768.jpg";
immagini[6] = "logo.jpg";
immagini[7] = "Madrid-acdc_12.jpg";

var path = "gallery/";
var imgBig = document.getElementsByName("imgBig");
var selected = 0;
var immaginona = document.getElementsByName("immaginona");

function seleziona(immagineSelezionata){
}

function next(){
	if(selected == immagini.length - 1){
		visualizza(0);
		return;
		}
	visualizza(selected + 1);
	return;
}

function prev(){
	if(selected == 0){
		visualizza(immagini.length - 1);
		return;
		}
	visualizza(selected - 1);
	return;
}

/*
function ingrandisci(){
	ingrandimento = window.open("","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=800, height=800");
	ingrandimento.document.write("<html>");
	ingrandimento.document.write(" <head>");
	ingrandimento.document.write("  <title>"+immagini[selected]+"</title>");
	ingrandimento.document.write(" </head>");
	ingrandimento.document.write(" <body>");
	ingrandimento.document.write("  <img src=gallery/"+immagini[selected]+" alt="+immagini[selected]+" />");
	ingrandimento.document.write(" </body>");
	ingrandimento.document.write("</html>");
	ingrandimento.focus();
}*/

function ingrandisci(){
	ingrandimento = window.open(path+immagini[selected],"_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=yes, width=800, height=800");
	ingrandimento.focus();
}

function visualizza(num){
	if (num == selected)
		return 0;
	var old = document.getElementsByName("miniatura" + selected);
	var nuovo = document.getElementsByName("miniatura" + num);
	
	//document.getElementsByName("id" + selected)[0].class = "anteprima";
	//document.getElementsByName("id" + num)[0].class = "anteprimaSelezionata";
	immaginona[0].src = path+immagini[num];
	immaginona[0].alt = path+immagini[num];
	selected = num;
}

function caricamento(){
	immagineGrande.src = "images/carimanento.jpg";
	return; 
}

///Funzioni create per un ipotetica espansione ma poi non utilizzate/*
var distanza = 1;

function inizializzaBig(){
	return path+immagini[0];
}

function inizializza(num){
	document.write(path+"mini/"+immagini[num]);
}

/*function setWidth(elemento){
	return document.getElementsByName("contenitoreAnteprime")[0].length - (immagini.length -1) * distanza / immagini.length;
}*/