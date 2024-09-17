<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('courses.index');
    }
}
