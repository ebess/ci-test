<?php

namespace Ebess\Tests;

use Ebess\CiTest\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testFooMake()
    {
        $fut = new Foo;

        $this->assertEquals(5, $fut->make(), 'Make has to return 5.');
    }

    public function testFooFail()
    {
        $fut = new Foo;

        $this->assertNotNull($fut->make(), 'Make has to fail right here.');
    }
}
