<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function showAllQuestions()
    {
        return response()->json(Question::all());
    }

    public function showOneQuestions($id)
    {
        return response()->json(Question::find($id));
    }

    public function create(Request $request)
    {
        $Questions = Question::create($request->all());

        return response()->json($Questions, 201);
    }

    public function update($id, Request $request)
    {
        $Questions = Question::findOrFail($id);
        $Questions->update($request->all());

        return response()->json($Questions, 200);
    }

    public function delete($id)
    {
        Question::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
