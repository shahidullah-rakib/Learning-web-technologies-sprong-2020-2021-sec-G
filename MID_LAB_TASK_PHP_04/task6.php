<?php

$flag= false;

$arr =array(1,2,3,4,5,6,7,8,9);
for($i=0; $i<count($arr); $i++)
{
    if($arr[$i]==3)
	{   
		$flag=true; 
		break;	
	}	
}
	if($flag)
		echo "value found";
	else
		echo "value not found";
?>