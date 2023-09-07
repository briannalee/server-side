<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html data-bs-theme="dark">

<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script defer src="/csci2442/server-side/dist/main.js"></script>
</head>

<body class="">
<div class="container-fluid">
	<div class="row col-sm-12 text-center"><h1>Welcome to the CSCI 2442 Website of <?php 	echo "$firstName $lastName" ?> </h1></div>