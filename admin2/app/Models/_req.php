<?php
//error_reporting(1);
require('../config/db_handler.php');
require('../app/Libraries/Functions.php');
require('HeaderProtection.php');
require('RequestProtection.php');
$request = new RequestProtection;
$tab['parent']="";$tab['child']="";$tab['sub-child']="";
?>