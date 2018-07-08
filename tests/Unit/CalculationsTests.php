<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CalculationsTest extends TestCase
{
       
    public function testAdd()
    {
        $this->assertEquals(
          4,
          2 + 2
        );
    }

    public function testMultiply()
    {
        $this->assertEquals(
          9,
          3 * 3
        );
    }
}