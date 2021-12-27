<?php

/*
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Flowerallure\DesignLearn\Builder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        $this->limit = ' LIMIT '.$start.' OFFSET '.$offset;

        return $this;
    }
}
