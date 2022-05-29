<?php

require __DIR__ . '/vendor/autoload.php';

use Brick\Math\BigInteger;
use Brick\Math\BigDecimal;
use Brick\Math\BigRational;

$ten = BigInteger::of(10);

echo $ten->plus(5); // 15
echo "<br />";
echo $ten->multipliedBy(3); // 30

$int = BigInteger::of(123546);
$sec_int = BigInteger::of('9999999999999999999999999999999999999999999');

$decimal = BigDecimal::of(1.2);
$sec_decimal = BigDecimal::of('9.99999999999999999999999999999999999999999999');

$rational = BigRational::of('2/3');
$sec_rational = BigRational::of('1.1'); // 11/10

echo "<br />";
echo "BigInteger";
echo "<br />";
echo $int->plus(5);
echo "<br />";
echo $sec_int->plus(3);

echo "<br />";
echo "BigDecimal";
echo "<br />";
echo $decimal->plus(2.8);
echo "<br />";
echo $sec_decimal->multipliedBy(2);

echo "<br />";
echo "BigRational";
echo "<br />";
echo $rational->plus(2);
echo "<br />";
echo $sec_rational->plus(1);