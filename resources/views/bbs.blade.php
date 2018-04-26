<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>掲示板システム</title>

        <!-- これはbootstrapのスタイルシートを定義しています。 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Laravel掲示板</h1>
            <form method="POST" action="./bbs">
                {{ csrf_field() }}
                <!-- 投稿用の入力フォームはここから -->
                @auth <!--ここを追記-->
                <div class="form-group">
                    <label for="comment">タイトル:</label>
                    <input type="text" class="form-control" id="title" name="title" 
                           placeholder="ここにタイトルを記述して下さい。">
                </div>
                <div class="form-group">
                    <label for="comment">投稿内容:</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment" 
                              placeholder="ここに投稿内容を記述して下さい。"></textarea>
                </div>
                <input type="submit" value="投稿する" class="btn btn-primary btn-lg" name="contribute">
                @endauth<!--ここを追記-->
                <!-- ここまで -->
            </form>
            <hr>
            <!-- 投稿内容ここから -->
            @foreach($articles as $article)
            <div class="row">
                <label>タイトル:<b>{{$article->title}}</b></label>
            </div>
            <div class="row">
                <label>{!!nl2br(e($article->comment))!!}</label>            
            </div>
            <hr>
            @endforeach
            <!-- ここまで -->
        </div>
        <!-- ここにBootstrapで使用するjavascriptファイルを記述します。 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
