<?php


namespace Parser;


class UrlRequest
{
    private function validate(string $url): bool
    {
        return (bool) @get_headers($url);
    }

    public function request(string $url)
    {
        $responseParser = new ResponseParser;

        try {
            if (!$this->validate($url)) {
                throw new BadHttpRequestException();
            }
        } catch (BadHttpRequestException $e) {
            echo $responseParser->generateResponse($e->errorMessage($url),true);
        }

        $tagsParser = new TagsParser();
        $tags = $tagsParser->parse($url);

        $tagsRenderer = new TagsRenderer($tags);
        $result = $tagsRenderer->render();

        echo $responseParser->generateResponse($result);
    }
}