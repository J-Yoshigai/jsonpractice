<!DOCTYPE html>
<link rel="stylesheet" href="assets/css/reset.css">
<link rel="stylesheet" href="assets/css/stylesheet.css">
<html>
  <head>
    <meta charset="utf-8">
    <title>operation</title>
  </head>
  <body>
    <div class="task_wrap">
      <div class="top">

        <div class="add_task">
          <p><a href="/vehicles/create">車両追加</a></p>
        </div>
      </div>

      <div class="task_table">
        <table class="">
          <thead>
            <th>ID</th>
            <th>車両名</th>
            <th>乗車可能人数</th>
            <th>Action</th>
          </thead>
          <tbody>
            @foreach($vehicles as $_vehicle)
            <tr>
            <td>{{$_vehicle->vehicle_id}}</td>
            <td>{{$_vehicle->vehicle_name}}</td>
            <td>{{json_decode($_vehicle->capacities)->people}}</td>
            <td>{{json_decode($_vehicle->capacities)->suitcase}}</td>
            <td><a href="/vehicles/{{$_vehicle->vehicle_id}}">編集</a></td>
          </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </body>
  <!--<script>
    function deletePost(e) {
  
    if (confirm('本当に削除していいですか?')) {
      document.getElementById('from_'+e.dataset.id).submit();
    }
  }
  </script>-->
</html>
