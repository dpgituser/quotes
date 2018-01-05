<?php
/*
 * @formatter:on
 */
include_once 'functions.inc.php';
error_reporting("E_ALL");

$f_sym­bol = "AAPL";
$f_tags = "e=asf";
$f_export = ".csv;";

$a_kurs_is = loadYahoo­Quo­tes($f_sym­bol, $f_tags, $f_export);
// echo "zeige quotes" . $a_kurs_is . "\n";
echo "zeige quotes\n";
var_dump($a_kurs_is);
echo "\n";
?>