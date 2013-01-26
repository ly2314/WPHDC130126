<?php
	$new = 0;
    $name = $_GET["name"];
	$says = $_GET["says"];
	if (!file_exists("test/name.txt"))
	{
		$fp = fopen("test/name.txt", "x");
		fclose ($fp);
		chmod ("test/name.txt", 0777);
	}
	if (!file_exists("test/data.txt"))
	{
		$fp = fopen("test/data.txt", "x");
		fclose ($fp);
		chmod ("test/data.txt", 0777);
	}
	if ( !($fp = fopen("test/name.txt", "a")))
	{
		echo "cannot save";
	} 
	else 
	{	
		fwrite ($fp, $name);
		fwrite ($fp, "\n");
		fclose ($fp);
	}
	if ( !($fp = fopen("test/data.txt", "a")))
	{
		echo "cannot save";
	} 
	else 
	{
		fwrite ($fp, $says);
		fwrite ($fp, "\n");
		fclose ($fp);
	}
?>