<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Armstrong Number Checker</title>
</head>
<body>
 <h1>Armstrong Number Checker</h1>
 <form action="" method="post">
 Enter a number: <input type="text" name="number">
 <input type="submit" value="Check">
 </form>
 <?php
 function isArmstrong($number) {
 $sum = 0;
 $numDigits = strlen($number);
 $temp = $number;
 while ($temp != 0) {
 $remainder = $temp % 10;
 $sum += pow($remainder, $numDigits);
 $temp = intval($temp / 10);
 }
 if ($number == $sum) {
 return true;
 } else {
 return false;
 }
 }
 function displayArmstrongNumbers($end) {
 echo "<p>Armstrong numbers in range from 1 to $end:</p>";
 for ($i = 1; $i <= $end; $i++) {
 if (isArmstrong($i)) {
 echo "$i ";
 }
 }
 }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inputNumber = $_POST["number"];
 if (is_numeric($inputNumber) && $inputNumber >= 0 &&
strpos($inputNumber, '.') === false) {
 if ($inputNumber != 0) {
 if (isArmstrong($inputNumber)) {
 displayArmstrongNumbers($inputNumber);
 } else {
 echo "<p>$inputNumber is not an Armstrong number.</p>";
 }
 } else {
 echo "<p>0 is not an Armstrong number.</p>";
 }
 } else {
 echo "<p>Please enter a non-negative integer.</p>";
 }
 }
 ?>
</body>
</html>

