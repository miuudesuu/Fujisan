<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\Answer;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index(Question $question, QuestionCategory $question_category)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('questions.index')->with(['questions' => $question->get(),'question_categories' => $question_category->get()]);
    }
    public function show(Question $question,Answer $answer)
    {
        return view('questions.show')->with(['question' => $question,'answers' => $answer->get()]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    public function create(QuestionCategory $question_category)
    {
        return view('questions.create')->with(['question_categories' => $question_category->get()]);
    }
    public function store(Request $request, Question $question)
    {
        // 現在認証しているユーザーのIDを取得
        $input = $request['question'];
        $id = Auth::id();
        $input['user_id'] = $id;
        $question->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
    public function update(Request $request, Question $question)
    {
        $input_post = $request['question'];
        $question->fill($input_post)->save();
    
        return redirect('/questions/' . $question->id);
    }
    
    public function edit(Question $question, QuestionCategory $question_category)
    {
        return view('questions.edit')->with(['question' => $question,'question_categories' => $question_category->get()]);
    }
    
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/questions');
    }
}
