<?php


namespace Parser;


class ResponseParser implements ResponseParserInterface
{
    public function generateResponse(string $content, bool $error = false)
    {
        return json_encode([
            'error' => $error,
            'content' => $content
        ]);
    }
}