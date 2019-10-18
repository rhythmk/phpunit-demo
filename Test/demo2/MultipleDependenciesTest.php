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
 *
 */
class MultipleDependenciesTest extends TestCase
{

    public function testFirst()
    {
        $this->assertTrue(true);
        return "testFirst";

    }


    public function testSecond()
    {
        $this->assertTrue(true);
        return "second";

    }

    /**
     * @depends  testFirst
     * @depends  testSecond
     */
    public function testConsumer($args)
    {
        $this->assertEquals('testFirst', $args);
    }

}