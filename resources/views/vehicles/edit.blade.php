<!DOCTYPE html>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/stylesheet.css">
<html>
  <head>
    <meta charset="utf-8">
    <title>vehicle</title>
  </head>
  <body>
    <div class="add_wrap">

    <form class="add" action="/vehicles/{{$vehicle->vehicle_id}}" method="post">
      @csrf
      @method('PUT')

        <label>タイトル</label>
        <input type="text" name="vehicle_name" value={{$vehicle->vehicle_name}}>
        <br>

        <label>乗車可能人数</label>
        <input type="text" name="people" value={{json_decode($vehicle->capacities)->people}}>
        <br>

        <label>荷物の数</label>
        <input type="text" name="suitcase" value={{json_decode($vehicle->capacities)->suitcase}}>
        <br>

        <input class="entry" type="submit" name="" value="更新">
    </form>
        <a href="/vehicles">キャンセル</a>
    </div>
  </body>
</html>
