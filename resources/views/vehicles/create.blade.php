<!DOCTYPE html>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/stylesheet.css">
<html>
    <head>
        <meta charset="utf-8">
        <title>operation</title>
    </head>
    <body>
        <form class="add" action="/vehicles" method="post">
            @csrf
            <label>車両名</label>
            <input type="text" name="vehicle_name">
            <br>

            <label>乗車可能人数</label>
            <input type="text" name="people">
            <br>

            <label>荷物の数</label>
            <input type="text" name="suitcase">
            <br>

            <input class="entry" type="submit" value="登録">
        </form>
            <a href="/vehicles">キャンセル</a>
  </body>
</html>
