

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <title>PRETEST PREAKTIKUM PROGNET</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="container">
            <div id="header">
                <h1>PRETEST PRAKTIKUM PROGNET</h1>
            </div>
    
            <div id="konten1">
            <a href="{{route('identitas.create')}}" type="submit" class="btn btn-primary">TAMBAH</a>
                <table style="width: 90%;">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                @foreach($identitas as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->berat}}</td>
                <td>{{$data->tinggi}}</td>
                <td>
                <form Action="{{route('identitas.destroy',['identitas' => $data->id])}}" method="POST"> 
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
                <form action="{{route('identitas.edit',['identitas' => $data->id])}}" method ="get">
                        @csrf
                        <button type="submit" class="btn btn-success">UPDATE</button>
                </form>
                </td>
                </tr>
                @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </body>
</html>