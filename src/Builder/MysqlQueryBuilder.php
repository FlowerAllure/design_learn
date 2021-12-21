<?php


namespace Flowerallure\DesignLearn\Builder;

use JetBrains\PhpStorm\Pure;

class MysqlQueryBuilder implements SQLQueryBuilder
{
    protected string $table;

    protected string $select = '*';

    protected array $where = [];

    protected string $limit;

    protected function reset(): void
    {
        $this->query = new \stdClass();
    }

    public function table($table): SQLQueryBuilder
    {
        $this->table = $table;

        return $this;
    }

    public function select(array $fields = []): SQLQueryBuilder
    {
        $this->select = $fields ? implode(", ", $fields) : $this->select;

        return $this;
    }

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        $this->where[] = "$field $operator '$value'";

        return $this;
    }

    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        $this->limit = " LIMIT " . $start . ", " . $offset;

        return $this;
    }

    #[Pure]
    public function getSQL(): string
    {
        $sql = "select $this->select from $this->table";
        if ($this->where) {
            $sql .= " where " . implode(' and ', $this->where);
        }
        if ($this->limit) {
            $sql .= $this->limit;
        }
        $sql .= ";";

        return $sql;
    }
}
