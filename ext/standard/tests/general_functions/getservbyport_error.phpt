--TEST--
Test function getservbyport() by calling it more than or less than its expected arguments
--CREDITS--
Italian PHP TestFest 2009 Cesena 19-20-21 june
Fabio Fabbrucci (fabbrucci@grupporetina.com)
Michele Orselli (mo@ideato.it)
Simone Gentili (sensorario@gmail.com)
--FILE--
<?php
$port = 80;
$protocol = "tcp"; 
$extra_arg = 12;
var_dump(getservbyport( $port, $protocol, $extra_arg ) );
var_dump(getservbyport($port));
?>
--EXPECTF--
Warning: Wrong parameter count for getservbyport() in %s.php on line %d
NULL

Warning: Wrong parameter count for getservbyport() in %s.php on line %d
NULL
