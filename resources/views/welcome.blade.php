<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>SPK</title>
</head>
<body>

    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png" alt=""></a>
    </div>

    <div class="judul">
      <h3>Peringkat Negara dengan Masalah Kesehatan Gizi (dari rendah ke tinggi)</h3>
    </div>

    <div class="judul">
      <a class="btn btn-success" href="/tambahnegara" role="button">Tambah</a>
    </div>

    <div class="container">
        <table class="table" style="background-color: #333">
            <thead>
              <tr>
                <th scope="col">Peringkat</th>
                <th scope="col">Negara</th>
                <th scope="col">Score</th>
              </tr>  
            </thead>

            @foreach ($datanegara as $data)
            <tbody>
                <tr>
                    <th>{{ $data->id }}</th>
                    <th>{{ $data->negara_peringkat }}</th>
                    <td>{{ $data->score }}</td>
                    {{-- <td>
                      <form class="d-inline" action="/data/{{ $data->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" id="button1" class="btn btn-danger">DELETE</button>
                      </form>
                    </td> --}}
                </tr>
            </tbody>
            @endforeach        
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>

