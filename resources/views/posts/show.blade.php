<html lang = ja>
    <head>
        <meta charset="utf-8">
        <title>Show</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <div class="content">
                <div class="content_title">
                    <h1>{{ $post->title }}</h1>
                </div> 
                <div class="content_body">
                    <p class="body">{{ $post->body }}</p>
                </div>
                <div class="category">
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </div>
            </div>
            <div class="footer">
                <div class="edit">
                    <a href="/posts/{{$post->id}}/edit">編集</a>
                </div>
                <a href="/">投稿一覧に戻る<a> 
            </div>
        </body>
    </x-app-layout>
</html>