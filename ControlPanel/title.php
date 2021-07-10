<?php
$pageName = basename($_SERVER['PHP_SELF']);
if($pageName == "index.php")
	{
	echo "Admin : APT SOCY";
	}
if($pageName == "faculty.php")
	{
	echo "Faculty";
	}	
if($pageName == "gallery.php")
	{
	echo "Gallery";
	}	
if($pageName == "news.php")
	{
	echo "News";
	}
?>