
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
  <h2>TUR TABLOSU</h2>           

  <table class="table table-hover">
    <thead>
      <tr>
        <th>TUR ADI</th>
      </tr>
    </thead>
    @foreach($tur as $turler)
    <tbody>
      <tr>
        <td>{{$turler->tur_adi}}</td>
        nur
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>
