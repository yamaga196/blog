<?php

//共通関数
require('function.php');

//post送信された場合

if(!empty($_POST)){

  //変数にユーザー情報を代入
  $blog_image = $_POST['blog_image'];
  $blog_title = $_POST['blog_title'];
  $blog_sentence = $_POST['blog_sentence'];
  $blog_content = $_POST['blog_content'];

  //ブログデータ挿入
  if(empty($err_msg)){

    try{
      //DBへ接続
      $dbh = dbConnect();
      //SQL文作成
      $sql = 'INSERT INTO blog_post (blog_image,blog_title,blog_sentence,blog_content) VALUES (:blog_image,:blog_title,:blog_sentence,:blog_content)';
      $data = array(':blog_image' => $blog_image,':blog_title' => $blog_title,':blog_sentence' => $blog_sentence, ':blog_content' => $blog_content);
  
      //クエリ実行
      queryPost($dbh, $sql, $data);
  
      // header('Location: ' . $_SERVER['SCRIPT_NAME']); //同じページへ
      // header("Location:index.php");
  
    }catch (Exception $e){
      echo '接続できませんでした';
    }

  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="sanitize.css">
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="stylesheet" href="dist/trix.css">
  <script src="dist/trix.js"></script>

  <title>Document</title>
</head>
<body>
  <header class="header">
    <h1 class="header_h1">ブログ</h1>
  </header>

  <section class="post">
  <form action="#" method="post" class="form">

    <div class="submit">
      <input type="submit" value="投稿">
    </div>

    <div class="file">
      <input type="file" name="blog_image" id="input" accept="image/*">
      <img src="" alt="" id="figureImage" style="width:100px; height:100px;"><span>ブログ画像</span>
    </div>

    <div class="explanation">
      <div class="title">
        <input type="text" name="blog_title"><span>ブログタイトル</span>
      </div>

      <div class="sentence">
        <textarea name="blog_sentence" id="" cols="30" rows="10"></textarea><span>ブログ説明</span>
      </div>
    </div>

    <input id="x" type="hidden" name="blog_content">
    <trix-editor input="x" class="trix_editor"></trix-editor>
  </form>
  </section>

  <div class="rink">
    <a href="index.php">戻る</a>
  </div>

  <script src="main.js"></script>
</body>
</html>