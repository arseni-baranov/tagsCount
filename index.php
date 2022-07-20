<?php

use Parser\PageRenderer;

require_once 'vendor/autoload.php';

$ini = parse_ini_file('app.ini');

$pageRenderer = new PageRenderer($ini['template_path']);
$pageRenderer->render();
