<!DOCTYPE html>
<html lang = ja>
    <head>
        <meta charset="utf-8">
        <title>Create</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <p>タイトル：</p>
                <input type="text" name="post[title]" placeholder="タイトルを入力" />
            </div>
            <div class="body">
                <p>メッセージ：</p>
                <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。" ></textarea><br>
            </div>
            <input type="submit" value="store" />
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>