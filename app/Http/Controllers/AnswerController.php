<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    
    public function create(Question $question)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('answers.create')->with(['question' => $question]);
    }

    public function store(Request $request, Answer $answer)
    {
        $input = $request['answer'];
        $id = Auth::id();
        $input['user_id'] = $id;
        $answer->fill($input)->save();
        // return redirect('/comments/' . $comment->id);
        return redirect('/questions/' );
    }
}
