<?php

$x=21 ;
$count=0;

for($i=2;$i<$x;$i++)
{
	if($x%$i==0)
	{
		$count=1;
	}	
}

if($count==1)
{	
echo "This is not a prime number";
}else
	{
	echo "This is prime number";
	}
?>