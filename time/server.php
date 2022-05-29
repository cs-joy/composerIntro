<?php

require __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\ResourceUsageFormatter;

foreach (\range(0, 100000) as $i) {
    // ...
}

print (new ResourceUsageFormatter)->resourceUsageSinceStartOfRequest();