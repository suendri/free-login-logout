<?php

/**
 * Gosoftware Media Abadi 2019
 * --
 * --
 * Gosoftware Media Abadi
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

//------------------------ ke index ya mas....
if (!defined('PHPBEGO') == TRUE)
{
	header("location:index.php");
} 

session_start();

$dbhost = "localhost";
$dbname = "";
$dbuser = "";
$dbpass = "";

$koneksi = new PDO ("mysql:host=" . $dbhost . ";
						dbname=" . $dbname . "",
						$dbuser, $dbpass);