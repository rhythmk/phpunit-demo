<?php
/**
 * Date: 2019/8/17
 * Time: 22:40
 */

namespace demo4;


use PHPUnit\Framework\TestCase;

/**
 * Class MethodTest
 * @package demo4
 *
 *   setUp ,tearDown 触发规则
 * 所有方法执行前都调用setUp
 * 所有方法执行后都调用 tearDown
 * demo4\StackTest::setUp
 * demo4\StackTest::testEmpty
 * demo4\StackTest::tearDown
 * demo4\StackTest::setUp
 * demo4\StackTest::testTrue
 * demo4\StackTest::tearDown
 */
class MethodTest extends TestCase
{

    public function setUp()
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    public function testEmpty()
    {
        $this->assertEmpty([]);
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    public function testTrue()
    {
        $this->assertTrue(true);
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    public function tearDown()
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }
}

/**
 *

 *
 */