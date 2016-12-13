<?php

	namespace X;

	require_once __DIR__.'/sys/autoload.php';

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(__DIR__).DS);
	// to acces to filesystem
	define('APP',ROOT.'app'.DS);
	