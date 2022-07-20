<?php

use Parser\UrlRequest;

require_once 'vendor/autoload.php';

$urlRequest = new UrlRequest();
$result = $urlRequest->request($_GET['url']);
