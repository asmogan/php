<?php
	
	function ConnectToDatabase(){
		$serverName  = "127.0.0.1:3306";
		$userName    = "root";
		$password    = "secret";
		$dbName      = "MYDATABASE";
		$result      = mysql_connect($serverName, $userName, $password);
		mysql_select_db($dbName);
		return $result;
	}
	
	#-------------------------------------------------------------------------------

	function getRecordAsArray($dbh,$qs){
	    $erg = false;
	    if($dbh){
			$result = mysql_query($qs,$dbh);
			// Wenn Abfrage erfolgreich (TRUE)
			if($result){
			    $erg = Array();
			    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
				$erg[count($erg)] = $line;
			    }
			}
	    }
	    return $erg;
	}
	
	#-------------------------------------------------------------------------------
	
	function getSQLValue($dbh,$qs){
	    $erg = false;
	    if($dbh){
			$result = mysql_query($qs,$dbh);
			if($result){
			    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
				    $erg = $line[0];
			    }
			}
	    }
	    return $erg;
	}
	
	#-------------------------------------------------------------------------------
	
	function getDatensatz($dbh,$qs){
		$tmp = getRecordAsArray($dbh,$qs);
		return (($tmp)?$tmp[0]:false);
	}
?>
