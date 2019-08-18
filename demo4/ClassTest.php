<?php
/**
 * Date: 2019/8/17
 * Time: 22:46
 */

namespace demo4;


use PHPUnit\Framework\TestCase;


/**

 * setUpBeforeClass
 * tearDownAfterClass
 * 使用场景， setUpBeforeClass 比如初始数据库连接对象。 tearDownAfterClass 释放数据库资源。
 *
 * setUpBeforeClass ，tearDownAfterClass 触发规则
输出：
demo4\ClassTest::setUpBeforeClass
demo4\ClassTest::setUp
demo4\ClassTest::testEmpty
demo4\ClassTest::tearDown
demo4\ClassTest::setUp
demo4\ClassTest::testTrue
demo4\ClassTest::tearDown
demo4\ClassTest::tearDownAfterClass
 *
 */
class ClassTest extends TestCase
{
    public static function setUpBeforeClass()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

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

    public static function tearDownAfterClass()
    {
        fwrite(STDOUT, __METHOD__ . "\n");
    }
}
