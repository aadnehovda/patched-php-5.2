--TEST--
ldap_first_entry() - Testing ldap_first_entry() that should fail
--CREDITS--
Patrick Allaert <patrickallaert@php.net>
# Belgian PHP Testfest 2009
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
require "connect.inc";

$link = ldap_connect($host, $port);
var_dump(ldap_first_entry($link));
var_dump(ldap_first_entry($link, $link, "Additional data"));
var_dump(ldap_first_entry($link, $link));
?>
===DONE===
--EXPECTF--
Warning: Wrong parameter count for ldap_first_entry() in %s on line %d
NULL

Warning: Wrong parameter count for ldap_first_entry() in %s on line %d
NULL

Warning: ldap_first_entry(): supplied resource is not a valid ldap result resource in %s on line %d
bool(false)
===DONE===
