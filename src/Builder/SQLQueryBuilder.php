<?php


namespace Flowerallure\DesignLearn\Builder;


interface SQLQueryBuilder
{
    public function table(string $table): SQLQueryBuilder;

    public function select(array $fields): SQLQueryBuilder;

    public function where(string $field, string $value, string $operator = '='): SQLQueryBuilder;

    public function limit(int $start, int $offset): SQLQueryBuilder;

    public function getSQL(): string;
}
