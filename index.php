<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
$bessie = new Cow('Hello, Dude!');
$bessie->setEyes('^^')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('w');
echo $bessie;