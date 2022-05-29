<?php

// including the composer autoload
include 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;
Image::configure(['driver' => 'imagick']);
// you are ready to go ...
$image = Image::make('img/back.jpg')->resize(300, 200)->save('img/back02.jpg', 100);

echo '<img src="img/back02.jpg" alt="save image"';