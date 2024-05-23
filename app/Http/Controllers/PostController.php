<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index (Post $post) {
        //ブログトップページの表示
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show (Post $post) {
        //投稿詳細表示、postテーブルのデータをviewへ
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create () {
        //ブログ作成画面表示
        return view('posts.create');   
    }
    
    public function store (PostRequest $request, Post $post) {
        //データ追加、投稿
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit (Post $post) {
        //投稿編集画面表示
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update (PostRequest $request, Post $post) {
        //編集実行
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
