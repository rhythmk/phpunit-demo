<?php
/**
 * Date: 2019/8/17
 * Time: 23:02
 */

namespace rhythmk\test\demo7;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true, '正常工作');
        $this->markTestIncomplete('此功能还未实现！');
    }

    public function testSkip()
    {
        $this->assertTrue(true, 'TRUE');
        $this->markTestSkipped("skip this test");
        $this->assertFalse(false);
    }

    /**
     * @requires extension mysqli
     */
    public function testSkip1()
    {
        $this->assertFalse(false);
    }
}