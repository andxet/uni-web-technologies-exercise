<?php
/*require_once('db.php');
$user = 'root';
$pass = 'root';
$host = 'localhost';
$db_name = 'Sito04_718024';
$Q_GET_ALL_ALBUM = "SELECT * FROM Dischi";
 
/*function dbConnect(){
	$dsn = 'mysql://'.$user.':'.$pass.'@'.$host.'/'.$db_name;
	echo $dsn;
	$db = DB::connect($dsn);
	if (DB::isError($db)){ 
		echo $db->getMessage();
		exit;
	} 
}*/
    
function dbConnect(){

	$user = 'root';
	$pass = 'root';
	$host = 'localhost';
	$db_name = 'Sito04_718024';
	
	$db = mysql_connect($host, $user, $pass)
		or die("Connessione non riuscita: " . mysql_error());
    mysql_select_db($db_name, $db)
    	or die ("Selezione del database non riuscita");
    return $db;
}

/*
function getAlbums(){
	if($db == null)
		dbConnect();
	$result = $db->query($Q_GET_ALL_ALBUM); // check that result was ok
	if (DB::isError($result)){
		echo $db->getMessage();
		exit;
	}		
	return $restult;
}*/

function getAlbums(){
	$Q_GET_ALL_ALBUM = "SELECT * FROM Dischi";

	$db = dbConnect();
	$albums = mysql_query($Q_GET_ALL_ALBUM, $db)
		or die("Query non valida: " . mysql_error());
	mysql_close($db);
	return $albums;
}

?>