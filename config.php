<?php
	session_start();

	if (!isset($_SESSION['lang'])) {
		$_SESSION['lang'] = "lv";
	}else if (isset($_GET['lang']) and $_SESSION['lang'] != $_GET['lang'] and !empty($_GET['lang'])) {
		if ($_GET['lang'] == "lv") {
			$_SESSION['lang'] = "lv";
		}else if ($_GET['lang'] == "en"){
			$_SESSION['lang'] = "en";
		}else if ($_GET['lang'] == "ru"){
			$_SESSION['lang'] = "ru";
		}
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>

<?php

$host = "57.db.sigmanet.lv"; /* Host name */
$user = "funcat"; /* User */
$password = "0c73wByJVo"; /* Password */
$dbname = "c_funcat"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname, 3306);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

?>