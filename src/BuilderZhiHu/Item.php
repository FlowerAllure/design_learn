<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\BuilderZhiHu;

class Item
{
    private string $itemName;

    private int $type;

    private string $code;

    private string $url;

    public function getItemName(): string
    {
        return $this->itemName;
    }

    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
