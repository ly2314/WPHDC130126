<?php
    $NAME = $_GET["F"];
	$LINE = $_GET["L"];
    $HANDLE = fopen($NAME,"r") or die ("CANT OPEN FILE");
	for ($i = 0; $i < $LINE; $i++)
	{
    	$DATA = fgets($HANDLE, filesize($NAME));		
	}
    fclose($HANDLE);
    echo $DATA;
?>