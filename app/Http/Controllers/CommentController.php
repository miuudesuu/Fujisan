<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    
    public function create(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('comments.create')->with(['post' => $post]);
    }

    public function store(Request $request, Comment $comment)
    {
        $input = $request['comment'];
        $id = Auth::id();
        $input['user_id'] = $id;
        $comment->fill($input)->save();
        // return redirect('/comments/' . $comment->id);
        return redirect()->route('post.index')->with('success', 'Comment posted successfully.');
    }
}
