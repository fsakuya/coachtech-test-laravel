<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top</title>
</head>

<body>
  <form action="/" method="post">
    @csrf
    氏名<br>
    <input type="text" name="name"><br>
    メールアドレス<br>
    <input type="email" name="email"><br>
    <input type="submit" value="送信する">
  </form>
</body>

</html>