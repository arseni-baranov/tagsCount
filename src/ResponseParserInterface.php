<?php


namespace Parser;


interface ResponseParserInterface
{
    public function generateResponse(string $content, bool $error);
}