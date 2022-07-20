<?php

use Parser\PageRenderer;
use Parser\TagsParser;
use Parser\TagsRenderer;

require_once 'vendor/autoload.php';

$ini = parse_ini_file('app.ini');

$pageRenderer = new PageRenderer($ini['template_path']);
$pageRenderer->render();



/*
$tagsParser = new TagsParser();
$tags = $tagsParser->parse('https://www.php.net');

$tagsRenderer = new TagsRenderer($tags);
$tagsRenderer->render();
*/