<?php
/**
 * Date: 2019/8/16
 * Time: 21:55
 */

namespace rhythmk\test\demo1;

use PHPUnit\Framework\TestCase;
use rhythmk\demo1\CalculatorUtil;


class CalculatorUtilTest extends TestCase
{

    public function testSum()
    {
        $util = new CalculatorUtil();
        $data = $util->sum(10, 1);
        $this->assertEquals($data, 11);
    }

    public function testSum1()
    {
        $util = new CalculatorUtil();
        $data = $util->sum(10, 1);
        $this->assertNotEquals($data, 12,'输出相等数据');
    }


}

