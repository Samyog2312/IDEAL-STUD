<?php

if(!isset($_SESSION['lang']))   
$_SESSION['lang'] ="en";
else if ( isset($_GET['lang']) && $_SESSION['lang'] !=$_GET['lang'] &&  !empty($_GET['lang'])){
    if ($GET['lang'] =="en")
    $_SESSION['lang'] ="en";
    else if  ($GET['lang'] =="fi")
    $_SESSION['lang'] = "fi";
}
require_once "languages/" . $_SESSION['lang'] . ".php"; 
?>