<?php

use App\Servives\PasswordGeneratorHelper;
use App\Servives\PasswordGeneratorService;
use Mockery\Mock;

class PasswordGeneratorServiceTest extends TestCase
{
    /** @var PasswordGeneratorService */
    protected $target;

    /** @var Mock  */
    protected $mock;

    protected function setUp()
    {
        parent::setUp();
        $this->mock = $this->initMock(PasswordGeneratorHelper::class);
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
        $this->mock->shouldReceive('str_shuffle')
            ->once()
            ->withAnyArgs()
            ->andReturnUsing(function (string $origin)  {
                return $origin;
            });

        $origin = 'abc123XYZ';
        $length = 6;
        $expected = 'abc123';

        /** act */
        $actual = $this->target->generate($origin, $length);

        /** assert */
        $this->assertEquals($expected, $actual);
    }
}