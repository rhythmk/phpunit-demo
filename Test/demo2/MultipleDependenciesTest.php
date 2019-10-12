<?php
/**
 * Date: 2019/8/17
 * Time: 7:57
 */

namespace rhythmk\test\demo2;


use PHPUnit\Framework\TestCase;

/**
 * Class MultipleDependenciesTest
 * @package demo2
 *
 *   通过 @depends 实现多方法依赖执行phpunit
 */
class MultipleDependenciesTest extends TestCase
{

    public function testFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }


    public function testSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends  testFirst
     * @depends  testSecond
     */
    public function testConsumer()
    {
        $this->assertEquals(['first', 'second'], func_get_args());
    }

}