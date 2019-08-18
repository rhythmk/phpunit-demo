<?php
/**
 * Date: 2019/8/17
 * Time: 8:14
 */

namespace demo2;

use Iterator;
use PHPUnit\Framework\TestCase;

/**
 *
 * Class IteratorData
 * @package demo2
 *     使用实现Iterator 借口的类 ，作为dataProvider的数据源
 */
class  IteratorData implements Iterator
{
    protected $position;

    protected $list;

    public function __construct($arr = [])
    {
        $this->list     = $arr;
        $this->position = 0;
    }

    public function current()
    {
        return $this->list[$this->position];
    }

    /**
     * Move forward to next element
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * Return the key of the current element
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Checks if current position is valid
     */
    public function valid()
    {
        return isset($this->list[$this->position]);
    }

    /**
     *  索引定位到首位
     */
    public function rewind()
    {
        $this->position = 0;
    }

}


class IteratorTest extends TestCase
{
    /*
    *@dataProvider providerData
    */
    /**
     * @dataProvider  providerData
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testTwo($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

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