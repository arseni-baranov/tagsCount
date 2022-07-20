<?php


namespace Parser;

use Exception;


class PageRenderer implements PageRendererInterface
{
    private string $template;

    public function __construct(string $template)
    {

        $this->template = $template;
    }

    /**
     * @throws Exception
     */
    public function render(): void
    {
        $template = file_get_contents($this->template);

        try {
            if (!$template) {
                throw new TemplateNotFoundException();
            }
        } catch (TemplateNotFoundException $e) {
            echo $e->errorMessage($this->template);
        }

        echo $template;
    }
}