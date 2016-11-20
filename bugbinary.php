

<?php
function solution(&$A, $X) {
    $N = sizeof($A);
    if ($N == 0) {
        return -1;
    }
    $l = 0;
    $r = $N - 1;
    while ($l < $r) {
        $m = (int)(($l + $r) / 2);
        if ($A[$m] > $X) {
            $r = $m - 1;
        } else {
            $l = $m;
        }
    }
    if ($A[$l] == $X) {
        return $l;
    }
    else return -1;
}

$A = array(3,2,-6,3,1);
solution($A);
?>