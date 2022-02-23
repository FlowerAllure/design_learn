<?php

namespace FlowerAllure\DesignLearn\Test;

use PHPUnit\Framework\TestCase;

class ExecTest extends TestCase
{
    //-------------shell_exec 的测试-----------------
    public function testShellExec()
    {
        $output = shell_exec('ls /');
        var_dump($output);

        $this->assertIsBool(true);
    }

    //-------------exec 的测试-----------------
    public function testExecArg1()
    {
        $output = exec('ls /');
        print_r($output);

        $this->assertIsBool(true);
    }

    public function testExecArg2()
    {
        $result = exec('ls /', $output);
        var_dump($result);
        print_r($output);

        $this->assertIsBool(true);
    }

    public function testExecArg3()
    {
        $result = exec('ls /', $output, $resultVar);
        var_dump($result);
        print_r($output);
        print_r($resultVar);

        $this->assertIsBool(true);
    }

    //-------------passthru 的测试-----------------
    public function testPassThru()
    {
        passthru('ls /');

        $this->assertIsBool(true);
    }

    //-------------System 的测试-----------------
    public function testSystem()
    {
        $result = system('ls /');
        var_dump($result);

        $this->assertIsBool(true);
    }
}
