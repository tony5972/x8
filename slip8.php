<?php
$radio1=$_POST['radio1'];
$arr=array("a"=>"abc","b"=>"pqr","c"=>"mno","d"=>"xyz");
if($radio1=="op1")
{
       echo "origal array is";
     print_r($arr);
	$z=array_flip($arr);
echo "after reverse key value pair";
print_r($z);
}
else if($radio1=="op2")
{
	echo "origal array is";
     print_r($arr);
shuffle($arr);
echo "after shuffle";
print_r($arr);

	
}
?>