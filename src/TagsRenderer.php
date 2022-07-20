<?php


namespace Parser;


class TagsRenderer implements TagsRendererInterface
{
    private array $tags;

    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }

    private function startContainer(): string
    {
        return '<div class="container mt-5">';
    }

    private function endContainer()
    {
        return '</div>';
    }

    private function startTable()
    {
        return '<table class="table">
          <thead>
            <tr>
              <th scope="col">Тэг</th>
              <th scope="col">Количество</th>
            </tr>
          </thead>
          <tbody>';
    }

    private function endTable()
    {
        return '</tbody>
        </table>';
    }

    public function render(): string
    {
        $result = $this->startContainer();
        $result .= $this->startTable();

        foreach ($this->tags as $tag => $count) {
            $result .= '<tr>';
            $result .= '<td>' . $tag . '</td>';
            $result .= '<td>' . $count . '</td>';
            $result .= '</tr>';
        }

        $result .= $this->endTable();
        $result .= $this->endContainer();

        return $result;
    }
}