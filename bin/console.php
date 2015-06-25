<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Pimple\Container;
use Cilex\Provider\Console\ContainerAwareApplication;
use Ald\Scrape\Config\ServiceProvider;
use Ald\Scrape\Command\Spider;

date_default_timezone_set('UTC');

$pimple = new Container();
$pimple->register(new ServiceProvider());

$application = new ContainerAwareApplication('Ald scrape application', '0.0.1');
$application->setContainer($pimple);
$application->add(new Spider());
$application->run();
