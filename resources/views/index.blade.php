<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>My DB Project</title>
</head>
{{ $errors }}
<body>
    <div class="panel panel-default">
        <div class="panel-heading">Book List</div>
            @foreach ($kitaplar as $kitap)
                {{$kitap->kitap_adi.'-'.$kitap->kitap_turu}}<br>

            @endforeach
    <form class="form-horizontal" action="{{url("/kaydet")}}" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                      <label for="examplekitapadi">Kitap Adı</label>
                      <input type="text" class="form-control" id="kitapadi" name="kitapadi" placeholder="Kitap Adını Giriniz">
                    </div>
                    <div class="form-group">
                        <label for="examplekitapadi">Kitap Türü</label>
                        <input type="text" class="form-control" id="kitapturu" name="kitapturu" placeholder="Kitap Türünü Giriniz">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kitap Sayfası</label>
                      <input type="text" class="form-control" id="kitapsayfa" name="kitapsayfa" placeholder="Kitap Sayfa Sayısını Giriniz ">
                    </div>
                    <button type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">Kaydet</button>
                  </form>
      </div>
</body>
</html>
