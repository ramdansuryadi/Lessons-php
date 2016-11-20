<?php
function solution($N){
	$result = false;
	$lengthstring = strlen($N);

	if($lengthstring  === 1){
		$result = $N;
	}
	if ($lengthstring > 1 && $lengthstring  < 100){
		$WordsArray = (explode(" ",$N));
	
		$WordsCount = count($WordsArray);
		$reverseWordsString = "";
		for ($i=0; $i < $WordsCount; $i++) { 
			if ($i > 0){
				 $reverseWordsString = $reverseWordsString . " "  ;
			}
		
		$reverseWordsString =  $reverseWordsString . join("", (array_reverse(str_split($WordsArray[$i]))));   
		}
		$result = $reverseWordsString;
		echo $result;
	}
	return $result;





}


solution("we test coders");
?>