<?php

require 'vendor/autoload.php';

use First\Package\MyClass as C1;
use Second\Package\MyClass as C2;
use Tracy\Debugger as Debugger;

Debugger::enable(Debugger::DEVELOPMENT);

$instance1 = new C1();
$instance2 = new C2();

dump($instance1->say(), $instance1->say("Hello World - P1"));
dump($instance2->say(), $instance2->say("Hello World - P2"));