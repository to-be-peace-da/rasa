<?php

namespace Tests\Unit;

use App\Models\Survey;
use Tests\TestCase;

class VotedOnceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_survey_that_has_already_been_voted_does_not_allow_you_to_vote_again(): void
    {
        $survey = Survey::create();

        $survey->voted = 1;
        $survey->save();

        $response = $this->get('/survey/' . $survey->link);

        $response->assertStatus(403);
    }
}
