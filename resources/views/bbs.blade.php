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
            <form>
                <!-- 投稿用の入力フォームはここから -->
                <div class="form-group">
                    <label for="comment">タイトル:</label>
                    <input type="text" class="form-control" id="title" name="title" 
                           placeholder="ここにタイトルを記述して下さい。">
                </div>
                <div class="form-group">
                    <label for="comment">投稿内容:</label>
                    <textarea class="form-control" rows="5" id="comment" name="content" 
                              placeholder="ここに投稿内容を記述して下さい。"></textarea>
                </div>
                <input type="button" value="投稿する" class="btn btn-primary btn-lg" name="contribute">
                <!-- ここまで -->
            </form>
            <hr>
            <!-- 投稿内容(サンプル1つめ)ここから -->
            <div class="row">
                <label>タイトル:<b>サンプル１</b></label>
            </div>
            <div class="row">
                <label>
                    本文サンプルです<br>
                    本文サンプルです<br>
                    本文サンプルです<br>
                </label>            
            </div>
            <hr>
            <!-- ここまで -->
            
            <!-- 投稿内容(サンプル２つめ)ここから -->
            <div class="row">
                <label>タイトル:<b>サンプル２</b></label>
            </div>
            <div class="row">
                <label>
                    本文サンプルです<br>
                    本文サンプルです<br>
                    本文サンプルです<br>
                </label>            
            </div>
            <hr>
            <!-- ここまで -->
        </div>
        <!-- ここにBootstrapで使用するjavascriptファイルを記述します。 -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </body>
</html>
