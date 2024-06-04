<!DOCTYPE html>
<html lang = ja>
    <head>
        <meta charset="utf-8">
        <title>Create</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <x-slot name="header">
                <h1>編集画面</h1>
            </x-slot>
            <div class="content">
                <form action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="content_title">
                        <h2>タイトル：<h2>
                        <input type="text" name="post[title]" placeholder="タイトルを入力" value="{{ $post->title }}">
                        <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
                    </div>
                    <div class="content_body">
                        <h2>メッセージ：<h2>
                        <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。">{{ $post->body }}</textarea><br>
                        <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
                    </div>
                    <div class="categories">
                        <h3>カテゴリー：</h3>
                        <select name="post[category_id]">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="store">
                </form>
            </div>
            <div class="footer">
                <a href="/posts/{{$post->id}}">戻る</a>
            </div>
        </body>
    </x-app-layout>
</html>