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
  <h2>TÜR EKLEME</h2>
  <form action="{{route('site.postturE')}}"method="POST">
    @csrf
    <div class="form-group">
      <label >TÜR ADI:</label>
      <input type="text" class="form-control"  name="tur_adi">
    </div>
    <div class="form-group">
      <label >YAYIN EVİ ADI:</label>
      <input type="text" class="form-control"  name="yayınEvi_adı">
    </div>
    <button type="submit" class="btn btn-default">EKLE</button>
  </form>
</div>

</body>
</html>
