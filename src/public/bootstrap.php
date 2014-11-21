<?php
require_once __DIR__."/autoload.php";
\define('ONIMBUS_ROOT', \dirname(__DIR__));

require_once ONIMBUS_ROOT."/thirdparty/Twig.php";

autoload('Resonantcore\\Lib', ONIMBUS_ROOT."/lib/src/");
autoload('Onionimbus\\Hub', ONIMBUS_ROOT."/app/");
autoload('Onionimbus\\System', ONIMBUS_ROOT."/thirdparty/system/src/");
