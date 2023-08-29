<?php

echo "PHP functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohanDas = [34, 98, 45, 12, 98, 93];
// $sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);

$harsh = [99, 98, 93, 94, 17, 100];
// $sumMarksHarsh = processMarks($harsh);
$sumMarksHarsh = avgMarks($harsh);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by harsh out of 600 is $sumMarksHarsh";

?>
