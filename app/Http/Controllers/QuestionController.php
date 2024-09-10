<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionCategory;
use App\Models\Answer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index(Question $question, QuestionCategory $question_category, User $user)
    {
        return view('questions.index')->with(['questions' => $question->get(),'question_categories' => $question_category->get(),'users' => $user->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function show(Question $question,Answer $answer)
    {
        return view('questions.show')->with(['question' => $question,'answers' => $answer->get()]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    public function create(QuestionCategory $question_category)
    {
        return view('questions.create')->with(['question_categories' => $question_category->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    public function store(Request $request, Question $question)
    {
        // 現在認証しているユーザーのIDを取得
        $input = $request['question'];
        $id = Auth::id();
        $input['user_id'] = $id;
        $question->fill($input)->save();
        return redirect('/questions/');
    }
    public function edit(Question $question, QuestionCategory $question_category)
    {
        return view('questions.edit')->with(['question' => $question,'question_categories'=>$question_category->get()]);
    }
    public function update(Request $request, Question $question)
    {
        $input_post = $request['question'];
        $question->fill($input_post)->save();
    
        return redirect('/questions/');
    }
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/questions');
    }

}
