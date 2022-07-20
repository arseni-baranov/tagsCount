<?php


namespace Parser;


class TagsParser implements TagsParserInterface
{
    const TAGS_REGEX = '/<([^\/!][a-z1-9]*)/i';

    public function parse(string $url): array
    {
        $testHTML = file_get_contents($url);

        preg_match_all(self::TAGS_REGEX,$testHTML,$matches);

        return array_count_values($matches[1]);
    }
}