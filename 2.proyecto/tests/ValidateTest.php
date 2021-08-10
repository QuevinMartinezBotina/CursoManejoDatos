<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('optimusoft@outlook.com');
        $this->assertTrue($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://laravel.com/docs/8.x/installation');
        $this->assertTrue($url);

        $url = Validate::url('https://laravel');
        $this->assertTrue($url);
    }

    public function test_password()
    {
        $password = Validate::password('1234567Ab');
        $this->assertTrue($password);

        $password = Validate::password('AbdCfLSJ538683');
        $this->assertTrue($password);
    }

    /* public function test_password()
    {
        $password  = Validate::password('123456AbcD');
        $this->assertTrue($password);

        $password  = Validate::password('Abc1w');
        $this->assertFalse($password);
    } */
}
