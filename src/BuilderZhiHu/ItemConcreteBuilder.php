<?php


namespace Flowerallure\DesignLearn\BuilderZhiHu;


class ItemConcreteBuilder implements ItemBuilder
{
    protected ?Item $item = null;

    public function __construct()
    {
        $this->item = new Item();
    }

    public function buildNormal()
    {
        $this->item->setItemName("普通商品");
        $this->item->setType(1);

        return $this->item;
    }

    public function buildCard()
    {
        $this->item->setItemName("卡劵商品");
        $this->item->setType(2);

        return $this->item;
    }

    public function buildVideo()
    {
        $this->item->setItemName("视频商品");
        $this->item->setType(3);

        return $this->item;
    }
}
