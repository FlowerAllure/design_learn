<?php


namespace Flowerallure\DesignLearn\BuilderZhiHu;


class ItemDirector
{
    private ?ItemBuilder $itemBuilder = null;

    public function __construct(ItemBuilder $itemBuilder)
    {
        $this->itemBuilder = $itemBuilder;
    }

    public function normalConstruct()
    {
        $item = $this->itemBuilder->buildNormal();

        return  $item;
    }

    public function cardConstruct()
    {
        $item = $this->itemBuilder->buildCard();

        return  $item;
    }

    public function videoConstruct()
    {
        $item = $this->itemBuilder->buildVideo();

        return  $item;
    }
}
