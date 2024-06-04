<!DOCTYPE html>
<html lang = ja>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <div class="header">
                <h1>Blog!</h1>
            </div>
            <div class="posts">
                @foreach ($posts as $post)
                    <h2 class="title">
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class="body">{{ $post->body }}</p>
                    <div class="category">
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    </div>
                    <div class="delete">
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="button" onclick="deletePost({{ $post->id }})" value="削除" />
                        </form>
                        </br>
                    </div>
                @endforeach
            </div>
            <div class="login_user">
                <br>ログインユーザー:{{ Auth::user()->name }}
            </div>
            <div class="paginate">{{ $posts->links() }}</div>
            <script>
                function deletePost(id){
                    'use strict'
                    if(confirm('削除すると復元できません。 \n本当に削除しますか？')){
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>
