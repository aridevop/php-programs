<?php
$p="dramatization";
$q="nioaztatimada";
$b=0;
$str1=strlen($p);
$str2=strlen($q);
if($str1==$str2){
for($i=0;$i<$str1;$i++){
	for($j=0;$j<$str2;$j++){
		if($p[$i]==$q[$j]){
			$b++;
			break;
		}
	}

  }
if($b==$str1){
	echo $p." and ".$q." are anagrams";
}
else{
	echo $p." and ".$q." are not anagrams";
	
}
}
else{
	echo $p." and ".$q." are not anagrams";
	}
?>