--TEST--
Bug #47566 (return value of pcntl_wexitstatus())
--SKIPIF--
<?php if (!extension_loaded("pcntl")) print "skip"; ?>
--FILE--
<?
$pid = pcntl_fork();
if ($pid == -1) {
 echo "Unable to fork";
 exit;
} elseif ($pid) {
 $epid = pcntl_waitpid(-1,$status);
 var_dump(pcntl_wexitstatus($status));
} else {
 exit(128);
}
?>
--EXPECT--
int(128)
