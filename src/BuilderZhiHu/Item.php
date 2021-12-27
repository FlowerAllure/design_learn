<?php


namespace Flowerallure\DesignLearn\BuilderZhiHu;


class Item
{
    private string $itemName;

    private int $type;

    private string $code;

    private string $url;

    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     */
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }


}
