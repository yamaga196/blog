<?php

//共通関数
require('function.php');

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
  <form class="form">
    <div class="submit">
      <input type="submit" value="投稿">
    </div>
    <div class="file">
      <input type="file" name="input" id="input" accept="image/*">
      <img src="" alt="" id="figureImage" style="width:100px; height:100px;">
    </div>
    <input id="x" type="hidden" name="content">
    <trix-editor input="x" class="trix_editor"></trix-editor>
  </form>
  </section>

  <div class="rink">
    <a href="index.php">戻る</a>
  </div>

  <script src="main.js"></script>
</body>
</html>