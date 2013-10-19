<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'head.txt'; ?>
<?php include 'google_analytics.txt'; ?>
<?php if ($_GET['l']=="p") include "fancybox.txt"; ?>
</head>
<body>
<?php include 'header.txt'; ?>
<div id="main">
<?php
	$page="home.txt";
	if ($_GET['l']=="d") $page="diary.txt";
	elseif ($_GET['l']=="n") $page="novel.txt";
	elseif ($_GET['l']=="p") $page="picture.txt";
	elseif ($_GET['l']=="c") $page="contact.txt";
	include $page; 
?>
<?php include 'sidebar.txt'; ?>
</div>
<?php include 'footer.txt'; ?>
</body>
</html>
