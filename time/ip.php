<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\IpUtils;

$ipv4 = '123.234.235.236';
$anonymousIpv4 = IpUtils::anonymize($ipv4);
// $anonymousIpv4 = '123.234.235.0'

$ipv6 = '2a01:198:603:10:396e:4789:8e99:890f';
$anonymousIpv6 = IpUtils::anonymize($ipv6);
// $anonymousIpv6 = '2a01:198:603:10::'