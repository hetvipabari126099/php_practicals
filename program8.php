<?php
function calculatePercentage($sub1, $sub2, $sub3, $sub4, $sub5)
{
    $totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    
    $percentage = ($totalMarks / 500) * 100;
    return $percentage;
}
$percentage = calculatePercentage(85, 90, 78, 88, 92);
echo "Percentage: " . $percentage . "%";
?>