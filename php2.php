<?php
function calculateSquareRoots($N) {
    $result = array();
    for ($i = 1; $i <= $N; $i++) {
        $result[] = sqrt($i);
    }
    return $result;
}

$N = 10;
$squareRootsArray = calculateSquareRoots($N);

foreach ($squareRootsArray as $value) {
    echo  "<br>" . $value . "<br>";
}
?>