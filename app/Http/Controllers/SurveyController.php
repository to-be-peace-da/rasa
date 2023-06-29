<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteSurveyRequest;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function begun()
    {
        $survey = Survey::create();

        return to_route('survey.show', [
            'survey' => $survey,
        ]);
    }

    public function show(Survey $survey)
    {
        if ($survey->voted) {
            abort(403, 'Уже проголосовали');
        }

        return view('survey', [
            'survey' => $survey
        ]);
    }

    public function vote(VoteSurveyRequest $request, Survey $survey)
    {
        if ($survey->voted) {
            abort(403, 'Уже проголосовали');
        }

        $request->validated();
        $survey->score = $request->score;
        $survey->voted = 1;
        $survey->save();

        return to_route('survey.index')->with('message', 'Спасибо, что оценили нас');
    }
}
