<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kütüphane otomasyonu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>KÜTÜPHANE OTOMASYONU</h2>
  <br>
  <hr>
<a href="{{route('site.getKitap')}}"  class="btn btn-primary">KİTAP</button>
<a href="{{route('site.getYazar')}}" class="btn btn-success">YAZAR</button>
<a href="{{route('site.getYayın')}}" class="btn btn-info">YAYINEVİ</button>
<a href="{{route('site.gettur')}}"  class="btn btn-danger">TÜR</button>   
</div>

</body>
</html>
