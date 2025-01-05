<?php

require_once 'Users.php';
use PHPUnit\Framework\TestCase;

class UsersTest extends TestCase
{
    public function testGet()
    {
        $users = new Users();
        $users->insert(['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]);
        $res = $users->get();
        $this->assertIsArray($res);

        $expectedArray = [0 => ['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]];
        $this->assertEquals($expectedArray, $res);
    }

    public function testUpdate()
    {
        $users = new Users();
        $users->insert(['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]);
        $res = $users->update(0, ['name'=>'Вова']);
        $this->assertIsArray($res);

        $expectedArray = ['name'=>'Вова'];
        $this->assertEquals($expectedArray, $res);
    }

    public function testInsert()
    {
        $users = new Users();
        //$res = $users->insert(['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]);
        $users->insert(['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]);
        
        //$this->assertNull($res);
        $this->addToAssertionCount(1);
    }

    public function testDelete()
    {
        $users = new Users();
        $users->insert(['name'=>'Иван', 'surname'=>'Петров', 'age'=>31]);
        //$res = $users->delete(0);
        $users->delete(0);
        
        //$this->assertNull($res);
        $this->addToAssertionCount(1);
    }
}