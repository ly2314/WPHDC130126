<?php
	$NAME = $_GET["F"];
	$LINE = $_GET["L"];
	$linecount = count(file($NAME));
    $HANDLE = fopen($NAME,"r") or die ("1");
	fclose($handle);
    if ($LINE > $linecount)
	{
		echo 1;
	}
	else
	{
	    echo 0;	
	}
?>