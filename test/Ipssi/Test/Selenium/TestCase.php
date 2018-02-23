<?php
/**
 * Created by PhpStorm.
 * User: sonny
 * Date: 23/02/2018
 * Time: 10:20
 */

namespace Ipssi\Test\Selenium;


class TestCase extends \PHPUnit_Extensions_Selenium2TestCase
{

    const URL = 'http://ipssi.com/';

    public function setUp()
    {
        $this->setHost('127.0.0.1');
        $this->setPort(4444);
        $this->setBrowserUrl('http://192.168.8.43/cleancode');
        $this->setBrowser('chrome');
    }

    public function getHostName()
    {
        return 'http://ipssi.com/';
    }

}