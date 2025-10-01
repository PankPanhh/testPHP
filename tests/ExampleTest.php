<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(4, 2 + 2);
    }

    public function testString()
    {
        $this->assertStringContainsString('Hello', 'Hello, World!');
    }
}
