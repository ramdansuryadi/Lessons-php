<?php
function solution($N){
		$destobin = decbin($N);
		$destobinstring = (string)$destobin;
		$destobinlength = strlen($destobinstring);
		$hitung = 0;
		$print = 0;

		for ($i=0; $i < $destobinlength; $i++) { 
			$data = substr($destobinstring, $i, 1);
			if ($data == 0) {
				$hitung++;
			}else{
				if ($hitung > $print) {
					$print = $hitung;
				}$hitung = 0;
			}
		}
			return $print;
	}
	echo solution(1041);
?>