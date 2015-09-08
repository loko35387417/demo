<?php

require_once dirname(__DIR__) . '/vendor/debug.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

$validate = new Generate\Validation();
$database = new \Generate\Database;

w($database);
w($database->name);

w($validate);
w($validate->name);