<?php
require __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator('fr_FR');
$translator->addLoader('array', new ArrayLoader());
$translator->addResource('array', [
    'Good Morning!' => 'Bonjour !',
], 'fr_FR');

echo $translator->trans('Good Morning!'); // outputs « Bonjour ! »