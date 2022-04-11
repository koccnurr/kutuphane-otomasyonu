
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
  <h2>YAYINEVİ  TABLOSU</h2>           

  <table class="table table-hover">
    <thead>
      <tr>
        <th>YAZAR ADI </th>
        <th>YAZAR SOYADI </th>,
        <th>YAZAR TEELFON </th>
        <th>YAZAR Kitapları </th>
      </tr>
    </thead>
    @foreach($yazar as $yazar)
    <tbody>
      <tr>
        <td>{{$yazar->yazar_adi}}</td>
        <td>{{$yazar->yazar_soyadi}}</td>
        <td>{{$yazar->yazar_tlf}}</td>
        <td>x</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>
