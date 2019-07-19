<?php


ini_set("display_errors", 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
//require '../source/class/class_core.php';
//require '../source/function/function_admincp.php';
//
//$discuz = C::app();
//$discuz->init();
//$admincp = new discuz_admincp();
//$admincp->core  = & $discuz;
//
//$f = $admincp->islogin();
//
//echo "<pre>";
//var_dump($f);
//var_dump($_COOKIE);
require_once "Run.php";

$obj = new Run;
$obj->boot();

