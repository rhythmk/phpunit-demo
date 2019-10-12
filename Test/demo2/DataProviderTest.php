<?php
/**
 * Date: 2019/8/17
 * Time: 8:03
 */

namespace rhythmk\test\demo2;


use PHPUnit\Framework\TestCase;


/**
 * Class DataProviderTest
 * @package demo2
 *      通过 @dataProvider  提供参数，遍历执行测试用例
 */
class DataProviderTest extends TestCase
{
    /**
     * @dataProvider providerData
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function providerData()
    {
        return [
            [1, 2, 3],
            [2, 0, 2],
            [3, 2, 5]
        ];
    }


}