<!DOCTYPE html>
<html lang = ja>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="header">
            <a href="/posts/create">create</a>
        </div>
        <div class="posts">
            @foreach ($posts as $post)
                <h2 class="title">
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class="body">{{ $post->body }}</p>
                <div class="delete">
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="button" onclick="deletePost({{ $post->id }})" value="delete" />
                    </form>
                </div>
            @endforeach
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
</html>