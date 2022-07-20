<?php

namespace Parser;

use Exception;

class BadHttpRequestException extends Exception
{
    public function errorMessage($url): string
    {
        return "Url <b style='color: red'>$url</b> is invalid";
    }
}