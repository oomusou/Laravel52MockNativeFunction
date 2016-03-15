<?php

use Mockery\MockInterface;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * 初始化Mock物件
     *
     * @param string $className
     * @return MockInterface
     */
    public function initMock(string $className) : MockInterface
    {
        $mock = Mockery::mock($className);
        App::instance($className, $mock);

        return $mock;
    }
}
