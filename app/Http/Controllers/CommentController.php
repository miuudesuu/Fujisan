<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index(Comment $comment)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return $comment->get();//$postの中身を戻り値にする。
    }
}
