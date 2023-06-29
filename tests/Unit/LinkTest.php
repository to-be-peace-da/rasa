<?php

namespace Tests\Unit;

use App\Models\Survey;
use Tests\TestCase;

class linkTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_that_link_is_string_unique_and_not_empty(): void
    {
        $survey = Survey::create();

        $this->assertIsString($survey->link);
        $this->assertNotEmpty($survey->link);
    }
}
