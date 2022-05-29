<?php
require __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\ResourceUsageFormatter;
use SebastianBergmann\Timer\Timer;

$timer = new Timer;
$timer->start();

foreach (\range(0, 100000) as $i) {
    // ...
}

print (new ResourceUsageFormatter)->resourceUsage($timer->stop());