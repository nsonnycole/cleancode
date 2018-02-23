<?php
/**
 * Created by PhpStorm.
 * User: sonny
 * Date: 23/02/2018
 * Time: 10:16
 */

namespace Ipssi\Test\Selenium;


class LoginTest extends TestCase
{
    public function testFormAttributes()
    {
    $this->url('login.php');
    $form = $this->byTag('form');
    $this->assertEquals('POST',$form->attribute('method'));
    $this->assertEquals('login.php',$form->attribute('action'));
    $this->assertTrue(true);
    }

    public function testEmptyLoginForm()
    {
       $this->url('login.php');

        $form = $this->byTag('form');
       $username = $this->byName('username');
       $password = $this->byName('password');

       $this->assertEquals('',$username->value('toto'));
       $this->assertEquals('',$password->value('1234'));

       $form->submit();
       $this->assertEquals('Login', $this->title());
    }

    public function testValidationForm()
    {
        $this->url('login.php');

        $form = $this->byTag('form');
        $username = $this->byName('username');
        $password = $this->byName('password');

        $this->assertEquals('',$username->value('toto'));
        $this->assertEquals('',$password->value('1234'));

        $form->submit();
        $this->assertEquals('Hello, World', $this->title());
    }

}