<?php


namespace Flowerallure\DesignLearn\Builder;


class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        $this->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
