<?php

class FooTest extends \PHPUnit\Framework\TestCase
{
	public function testBar()
	{
		self::assertEquals('baz', (new Sample\Foo)->bar());
	}
}