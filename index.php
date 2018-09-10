<?php
//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//INCLUDE THE FILES NEEDED...
require_once 'view/LayoutView.php';
require_once 'view/InputView.php';
require_once 'view/OutputView.php';

//CREATE OBJECTS OF THE VIEWS
$iv = new InputView();
$ov = new OutputView();
$lv = new LayoutView();

$lv->render($iv, $ov);
