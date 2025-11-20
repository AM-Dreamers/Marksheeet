<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    
</head>

<body>
</body>

</html>
<?php

session_start();
/* 
Math: 88
Science: 90
English: 86
Urdu: 85
Computer: 90
Attendance: 92%
Total: 439 / 500
Bonus: +2 (applied)
Percentage: 87.80%
Grade: A+
Status: Pass
Eligible for scholarship
Remarks: Excellent performance
*/


$math = $_SESSION['math'];
$sci = $_SESSION['sci'];
$bio = $_SESSION['bio'];
$chem = $_SESSION['chem'];
$phy = $_SESSION['phy'];
$att = $_SESSION['att'];
echo "<center>";

echo "<table border=1>";

echo "<th><h2>Subjects</h2></th>";

echo "<th><h2>Obtained Marks</h2></th>";
echo "<th><h2>Attendence</h2></th>";
echo "<th><h2>Result</h2></th>";

echo '<tr>';
echo '<td>';

echo "<b >Math <br> Science <br>Biology  <br>Chemistry  <br>Physics </b> ";

echo '</td>';

echo '<td>';

echo "<b class='text-center'>$math <br> $sci <br>$bio  <br>$chem  <br>$phy ";

echo '</td>';

echo '<td>';

echo "<h2>Students's attendence is  $att %</h2>";


echo '</td>';

echo '<td>';

$obt = $math + $sci + $bio + $chem + $phy;
$total = 500;

$per = $obt/$total*100;

if ($att < 75) {
    echo "<h2>Attendence is low that's why you are fail</h2>";
} elseif ($per <= 100 && $per >= 90) {

    $res = round($per);

    echo "<h2>The percentage is $res %<br> The result is A1 Grade</h2>";

} elseif ($per >= 80 && $per <= 90) {

    $res = round($per);


    echo "<h2>The percentage is $res %<br> The result is A Grade</h2>";
} elseif ($per >= 70 && $per <= 80) {
    $res = round($per);


    echo "<h2>The percentage is $res %<br> The result is B Grade</h2>";
} elseif ($per >= 60 && $per <= 70) {
    $res = round($per);


    echo "<h2>The percentage is $res %<br> The result is C Grade</h2>";
} elseif ($per >= 50 && $per <= 60) {
    $res = round($per);


    echo "<h2>The percentage is $res %<br> The result is D Grade</h2>";
} elseif ($per < 50) {
    $res = round($per);
    echo "<h2>The percentage is $res %<br> The result is Fail</h2>";
} else if ($phy >= 90) {
    $fper = $per + 2;
    echo "<h2>You acheived +2 bonus Total percentage is : $fper </h2>";
}

//echo "<h2>Students's attendence is  $att %</h2>";


echo '</td>';
echo '</tr>';
/* 
echo '<tr>';
echo '<td>';

$obt = $math + $sci + $bio + $chem + $phy;

echo "Total : $obt";

echo '</td>';
echo '</tr>'; */


/* echo '<tr>';
echo '<td>';
echo "<b class='text-center'>Total : $obt";
echo '</td>';
echo '</tr>'; */

/* echo "<h2>Total marks $obt</h2>"; */
echo '</table>';
echo "</center>";



?>