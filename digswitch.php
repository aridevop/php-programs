<?php
// Swapping the first and last character of a string using php
$p="12345";
$len=strlen($p);
$sst=substr($p,1,$len-2);
$end=$p[0];
$start=$p[$len-1];
$totstr=$start.$sst.$end;
echo "The reversed number is ".$totstr;
?>
