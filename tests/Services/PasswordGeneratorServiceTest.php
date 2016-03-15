<?php

use App\Servives\PasswordGeneratorService;

class PasswordGeneratorServiceTest extends TestCase
{
    /** @var PasswordGeneratorService */
    protected $target;

    protected function setUp()
    {
        parent::setUp();
        $this->target = App::make(PasswordGeneratorService::class);
    }

    protected function tearDown()
    {
        parent::tearDown();
        $this->target = null;
    }

    /**
     * @test
     */
    public function 產生6位數密碼()
    {
        /** arrange */
        $origin = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $length = 6;
        $expected = 'abc123';

        /** act */
        $actual = $this->target->generate($origin, $length);

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}