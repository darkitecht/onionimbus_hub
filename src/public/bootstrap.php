<?php
require_once __DIR__."/autoload.php";
\define('ONIMBUS_ROOT', \dirname(__DIR__));

autoload('Resonantcore\\Lib', ONIMBUS_ROOT."/lib/");
autoload('Onionimbus\\Hub', ONIMBUS_ROOT."/app/");
