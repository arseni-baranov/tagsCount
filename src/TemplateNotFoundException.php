<?php


namespace Parser\PageRenderer;

use Exception;

class TemplateNotFoundException extends Exception
{
    public function errorMessage($template = ''): string
    {
        return "Template <b style='color: red'>$template</b> file is not found";
    }
}