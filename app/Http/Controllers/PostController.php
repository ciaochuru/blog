<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index (Post $post) {
        //ブログトップページの表示
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function show (Post $post) {
        //投稿詳細表示、postsテーブルのデータをviewへ
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create (Category $category) {
        //カテゴリーモデルからcategoriesテーブルのデータを取得してブログ作成画面表示
        return view('posts.create')->with(['categories' => $category->get()]);   
    }
    
    public function store (PostRequest $request, Post $post) {
        //データ追加、投稿
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit (Post $post, Category $category) {
        //投稿編集画面表示
        return view('posts.edit')->with(['post' => $post, 'categories' => $category->get()]);
    }
    
    public function update (PostRequest $request, Post $post) {
        //編集実行
        $input = $request['post'];//nameがpost[]となっている[]の中身のデータを持ってくる
        $post->fill($input)->save();//更新
        return redirect('/posts/' . $post->id);
    }
    
    public function delete (Post $post) {
        $post->delete();
        return redirect('/');
    }
}
