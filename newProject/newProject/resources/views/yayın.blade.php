<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>yayın  evi </title>
</head>
<body>
	<h1>YAYIN EVİ TABLOSU</h1>
<form action="{{route('site.postyayınE')}}" method="POST">
	@csrf
  <div class="form-group">
    <label>YAYIN EVİ ADI:</label>
    <input type="text" class="form-control" name="yayınEvi_adı">
  </div>
  <div class="form-group">
    <label >BASIM TARİHİ:</label>
    <input type="date" class="form-control"name="basım_tarihi">
  </div>
  <button type="submit" class="btn btn-default">KAYDET</button>
</form>
</body>
</html>