<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $page_title ?> | New project </title>

	<link rel="stylesheet" type="text/css" href="ui/_css/_general.dd.css">
	<link rel="stylesheet" type="text/css" href="ui/<?php echo $page_link ?>/_styles.dd.css">

</head>
<body>
    
    <dd_loader>
		<div dd_onload></div>
		<div dd_ajaxload></div>
	</dd_loader>
    
	<header>
        <nav id="top_nav" align="right">
            
            <a>
                <span class="dd_longline"></span>
                <img  class="dd_circle">
            </a>
            
        </nav>
        
        <nav id="side_nav">
            <a>
               <img class="dd_circle">
            </a>
            
            <a>
                <img src='_assets/images/picture.svg' width='50'>
                <span class="dd_longline"></span>
            </a>
            
            <a>
                <img src='_assets/images/picture.svg' width='50'>
                <span class="dd_longline"></span>
            </a>
            
            <a>
                <img src='_assets/images/picture.svg' width='50'>
                <span class="dd_longline"></span>
            </a>
        </nav>
    </header>
	<main id="page_<?php echo $page_link?>">