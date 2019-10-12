<?php
/**
 * Date: 2019/8/17
 * Time: 7:50
 */

namespace rhythmk\test\demo2;


use PHPUnit\Framework\TestCase;

/**
 * Class DependencyFailureTest
 * @package demo2
 *          通过 @depends，测试用例。如果依赖测试用例错误，则终止程序
 */
class DependencyFailureTest extends TestCase
{
    public function testTrue()
    {
        $this->assertTrue(false, '失败案例');
    }

    /**
     * @depends  testTrue
     */
    public function testTwo()
    {
        $this->assertTrue(true);
    }
}