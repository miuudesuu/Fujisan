<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Comment;
use App\Models\User;
use Cloudinary;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post,Comment $comment)
    {
        return view('posts.show')->with(['post' => $post,'comments' => $comment->get()]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    public function create(PostCategory $post_category)
    {
        return view('posts.create')->with(['post_categories' => $post_category->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        // 現在認証しているユーザーのIDを取得
        $input = $request['post'];
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
        $id = Auth::id();
        $input['user_id'] = $id;
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post, PostCategory $post_category)
    {
       
        return view('posts.edit')->with(['post' => $post,'post_categories' => $post_category->get()]);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
