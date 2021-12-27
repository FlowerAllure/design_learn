<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\BuilderZhiHu;

interface ItemBuilder
{
    public function buildNormal();

    public function buildCard();

    public function buildVideo();
}
