<html>
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>FORM EDIT</title>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container prognet">
            <form id="form" style="width: 50%; height :100%; padding: 20px;  margin: auto; margin-top: 40px; border: 1px solid #DDD; box-shadow: 50px 10px 10px #DDD;" action="{{route('identitas.update',['identitas' => $identitas->id])}}" method="POST">
               @csrf
               @method('patch');
                <h1 style="margin-bottom: 30px">EDIT FORM IDENTITAS</h1>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input name="nama" type="text" class="form-control" id="inputEmail3" placeholder="Nama" value = "{{$identitas->nama}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input name="alamat" type="text" class="form-control" id="inputEmail3" placeholder="alamat" value = "{{$identitas->alamat}}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Berat Badan</label>
                    <div class="col-sm-4">
                        <input name="berat" type="text" class="form-control" id="inputEmail3" placeholder="berat" value = "{{$identitas->berat}}"> Kg
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-4">
                        <input name="tinggi" type="text" class="form-control" id="inputEmail3" placeholder="tinggi" value = "{{$identitas->tinggi}}"> cm
                    </div>
                </div>

                <div class="form-group row">
				  <div class="col-sm-10">
				    <button id="btn_save" type="submit" class="btn btn-primary">KIRIM</button>
				  </div>
				</div>
            </form>
        </div>
    </body>
</html>