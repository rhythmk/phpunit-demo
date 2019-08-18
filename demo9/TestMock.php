<?php
/**
 * Date: 2019/8/18
 * Time: 13:01
 */


namespace demo9;

use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;

/**
 * Class User
 * @package demo9
 *          mock 使用规则
 */
class User{
    public  function  getName(){
        return "name1";
    }

    public function  getNameById($id){
        if($id===10){
            return 'name10';
        }
        return 'name';
    }
}

class TestMock extends  TestCase
{
    public function  testStub(){
        $stub=$this->createMock(User::class);
        $stub->method('getName')->willReturn('name1');

        /* @var $stub  User */
        $this->assertEquals('name1', $stub->getName());
        fwrite(STDOUT, '############'.$stub->getNameById(1) .'$$$$$'. PHP_EOL);
    }

    public function testReturnArgumentStub()
    {
        // 为 SomeClass 类创建桩件。
        $stub = $this->createMock(User::class);
        /* @var $stub PHPUnit_Framework_MockObject_MockObject  */
        /* @var $stub  User */
        // 配置桩件。

        $stub->method('getNameById')
            // returnArgument 返回第一个参数
            ->will($this->returnArgument(0));

        // $stub->doSomething('foo') 返回 'foo'
        $this->assertEquals('1', $stub->getNameById(1));

        // $stub->doSomething('bar') 返回 'bar'
        $this->assertEquals('10', $stub->getNameById(10));
    }
    public function testReturnValueMapStub()
    {
        // 为 SomeClass 类创建桩件。
        $stub = $this->createMock(User::class);

        // 创建从参数到返回值的映射。
        $map = [
            ['a', 'd'],
            ['e', 'h']
        ];

        // 配置桩件。
        $stub->method('getNameById')
            ->will($this->returnValueMap($map));

        // $stub->doSomething() 根据提供的参数返回不同的值。
        $this->assertEquals('d', $stub->getNameById('a'));
        $this->assertEquals('h', $stub->getNameById('e'));
    }


    public  function  testFunctionCallback(){
        $stub = $this->createMock(User::class);
        $stub->method('getNameById')
            ->will( $this->returnCallback(function ($id){ return $id.$id; }));
        $this->assertEquals('ee', $stub->getNameById('e'));
    }


    /**
     * 将当前对象传入到回调mock
     */
    public  function  testFunctionCallback2(){
        $stub = $this->createMock(User::class);
        $_t= $this;
        $stub->method('getNameById')
            ->will( $this->returnCallback(function ($id) use($_t){
                return $_t->doubleId($id);
            }));
        $this->assertEquals('ee', $stub->getNameById('e'));
    }

    function doubleId($id){
       return $id.$id;
    }


//    public function testReturnSelf()
//    {
//        // 为 SomeClass 类创建桩件。
//        $stub = $this->createMock(User::class);
//        /* @var $stub  User */
//        // 配置桩件。
//
//        $stub->method('getNameById')
//            // returnArgument 返回第一个参数
//            ->will($this->testReturnSelf());
//
//        $this->assertEquals($stub, $stub->getNameById(1));
//
//    }
}
/**
 * 未mock的方法  调用无返回值
 * 如果原始类包含名为“method”的方法，就必须用 $stub->expects($this->any())->method('doSomething')->willReturn('foo');。
 */