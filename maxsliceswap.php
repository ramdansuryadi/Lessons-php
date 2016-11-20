
<?php
function solution($A)
{
	$maxSliceSum = $A[0];
	$maxSliceAfterInt = $A[0];
	for($i = 1; $i < count($A); $i++)
	{
		$tes = $A[$i];
		if ($tes < 0) {
		
		}else{
		$maxSliceAfterInt = max($A[$i], $maxSliceAfterInt + $A[$i]);
		$maxSliceSum = max($maxSliceSum, $maxSliceAfterInt);
		}
	}
	return $maxSliceSum;
}
$A = array(3,2,-6,3,1);
echo solution($A);
?>