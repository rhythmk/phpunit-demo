<?php
/**
 * Date: 2019/8/17
 * Time: 7:42
 */

namespace demo2;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $arr = [];
        $this->assertEmpty($arr);
        return $arr;
    }

    /**
     * @depends  testEmpty
     * @param $arr  array
     */
    public  function  testPush($arr ){

        array_push($arr,'test');
        $this->assertEquals('test',$arr[sizeof($arr)-1]);
        $this->assertNotEmpty($arr);
        return $arr;
    }

    /**
     * @depends  testPush
     * @param $arr
     */
    public  function  testPop($arr){
        $this->assertEquals('test',array_pop($arr));
        $this->assertEmpty($arr);

    }
}