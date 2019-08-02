<?php
//Swapping the first and last digit of a number
$p=599876;
$len=strlen($p);
$start= floor($p/(pow(10,$len-1)));
$end=$p%10;
$n=$p;
$r=0;
$j=0;
$nrr=array();
$m=0;
$nrr[$m]=$end;
$m=$len-1;
while($n>0){
    
	$r=$n%10;
	if($j!=0&&$j!=($len-1)&&$m!=0){
		$nrr[$m]=$r;
	//echo $r;
     // echo $m;

     }
	$n=floor($n/10);  //Digit Extraction
    $j++;
     $m--;
}
$nrr[$len-1]=$start;
//echo $nrr[3];

for($i=0;$i<$len;$i++)
{
	echo $nrr[$i];
}
?>