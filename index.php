<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="./ajax">Ajax</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="./ajax_input">Ajax_input</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="./ajax_session">Ajax_session</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
      <div class="navbar-header"><a class="navbar-brand" href="fileupload.html">ファイルアップロード</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ビザスク</legend>
     <label>名前：（匿名／ニックネーム可）<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>募集タイトル：<input type="text" name="title"></label><br> 
     <label>依頼背景<textArea name="haikei" rows="4" cols="40"></textArea></label><br>
     <label>欲しい情報、スキル、ネットワーク<textArea name="skill" rows="4" cols="40"></textArea></label><br> 
     <label>依頼者情報<textArea name="iraisya" rows="4" cols="40"></textArea></label><br> 
     <label>形式：<input type="text" name="astyle"></label><br>  
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
