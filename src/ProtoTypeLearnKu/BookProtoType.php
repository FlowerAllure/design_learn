<?php


namespace Flowerallure\DesignLearn\ProtoTypeLearnKu;


abstract class BookProtoType
{
    protected $title;

    protected $category;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}
