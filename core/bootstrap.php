<?php

use Recca0120\LaravelTracy\Tracy;

// before outout
$tracy = Tracy::instance();

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
