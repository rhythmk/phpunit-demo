<?php
/**
 * Date: 2019/8/16
 * Time: 21:55
 */

namespace rhythmk\test\demo1;

use PDO;
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


    public  function  testDb(){
        $pdo   =  new  PDO('mysql:host=127.0.0.1;dbname=rhythmk_phpunit','root','');
        $query =  $pdo->prepare('SELECT @@version');
        $query->execute([':cid'=>1 , ':author'=>'test1']);
        $rows  =  $query->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
        $this->assertNotEmpty($rows);

    }

}

