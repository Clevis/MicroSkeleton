<?php

use Nette\Diagnostics\Debugger;
use Nette\Application\Routers\Route;

require __DIR__ . '/vendor/autoload.php';

Debugger::$logDirectory = __DIR__ . '/tmp/log';
Debugger::$strictMode = TRUE;
Debugger::enable();

$configurator = new \Nette\Configurator;
$configurator->tempDirectory = __DIR__ . '/temp';
$configurator->addConfig(__DIR__ . '/config.php');
$configurator->createRobotLoader()
	->addDirectory(__DIR__ . '/presenters')
	->register();

$container = $configurator->createContainer();
$container->router[] = new Route('<action>', array('presenter' => 'Default', 'action' => 'default'));
$container->application->run();
