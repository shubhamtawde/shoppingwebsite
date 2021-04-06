<?php
/**********************************************************************
 *Contains all the basic Configuration
 *dbHost = Host of the MySQL DataBase Server
 *dbUser = Username of the DataBase
 *dbPass = Password of the DataBase
 *dbName = Name of the DataBase
 **********************************************************************/
$dbHost = 'localhost';
$dbUser = "root";
$dbPass = "";
$dbName = 'wp';
$conn =new mysqli($dbHost, $dbUser, $dbPass, $dbName);
?>