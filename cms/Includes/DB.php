<?php
$DSN='mysql:host = localhost:8888; dbname=cms4.2.1';
$ConnectingDB = new PDO($DSN,'root','root');
if(!$ConnectingDB)
	{
		//echo "<h3>Not able to establish Database Connection</h3>";
	}
else
    {
       // echo "connection success";
    }
?>
