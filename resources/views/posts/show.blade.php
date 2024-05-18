<html lang = ja>
    <head>
        <meta charset="utf-8">
        <title>Show</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $post->title }}</h1>
        <div class="content_body">
            <h3>本文</h3>
            <p class="body">{{ $post->body }}</p>
        </div>
        <div class="footer">
            <a href="/">投稿一覧に戻る<a>  
        </div>
    </body>
</html>