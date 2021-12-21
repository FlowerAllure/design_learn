<?php


use Flowerallure\DesignLearn\Builder\MysqlQueryBuilder;
use Flowerallure\DesignLearn\Builder\PostgresQueryBuilder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testMysql()
    {
        $mysqlQueryBuilder = new MysqlQueryBuilder();
        $user = $mysqlQueryBuilder->table('user')->select(["name", "email", "password"])->where("age", 18, ">")
            ->where("age", 30, "<") ->limit(10, 20);

        echo $user->getSQL();

        $this->assertInstanceOf(MysqlQueryBuilder::class, $user);
    }

    public function testPostgres()
    {
        $mysqlQueryBuilder = new PostgresQueryBuilder();

        $user = $mysqlQueryBuilder->table('user')->select(["name", "email", "password"])->where("age", 18, ">")
            ->where("age", 30, "<") ->limit(10, 20);

        echo $user->getSQL();

        $this->assertInstanceOf(PostgresQueryBuilder::class, $user);
    }
}
