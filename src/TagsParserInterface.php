<?php


namespace Parser;


interface TagsParserInterface
{
    public function parse(string $url): array;
}