<?php

namespace Flowerallure\DesignLearn\Composite;

class TextElement implements RenderableInterface
{
    public function __construct(private string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}
