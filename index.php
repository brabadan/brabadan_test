<?php

require_once "studio/vendor/autoload.php";

use \Brabadan\Test\SkeletonClass;

$class = new SkeletonClass();

echo $class->echoPhrase("Оно работает! - v1.0.1 commit 2!");
