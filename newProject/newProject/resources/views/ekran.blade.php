
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>KİTAP TABLOSU</h2>           

  <table class="table table-hover">
    <thead>
      <tr>
        <th>KİTAP ID</th>
        <th>KİTAP ADI</th>
        <th>KİTAP YAZAR</th>
      </tr>
    </thead>
    @foreach($kitap as $kitaplar)
    <tbody>
      <tr>
        <td>{{$kitaplar->id}}</td>
        <td>{{$kitaplar->kitap_adi}}</td>
        <td>{{@$kitaplar->yazar->yazar_adi}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>
