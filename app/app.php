<?php
require 'bootstrap.php';

use Monolog\Logger as Logger;
use Monolog\Handler\StreamHandler as StreamHandler;

$logger = new  Logger('app');
$logger->pushHandler(new StreamHandler(__DIR__.'/logs/app.log', Logger::DEBUG));
$logger->info('This is a log! ^_^ ');
$logger->warning('This is a log warning! ^_^ ');
$logger->error('This is a log error! ^_^ ');
