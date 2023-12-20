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
    <title>Halaman Tambah Negara</title>
</head>
<body>

    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png" alt=""></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-1">
                <h3>Form Tambah Negara</h3>
                <form action="/tambah" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Negara</label>
                        <input class="form-control" type="text" name="negara" id="name" placeholder="Masukkan Nama Negara">
                    </div>
                    <div class="form-group">
                        <label for="nim">Kriteria 1 Income Classification (Pendapatan) </label>
                        <input class="form-control" type="text" name="C1" id="nim" placeholder="Masukkan nilai Kriteria 1 Income Classifivation (Pendapatan)">
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Kriteria 2 Severe Wasting</label>
                        <input class="form-control" type="text" name="C2" id="prodi" placeholder="Masukkan nilai Kriteria 2 Severe Wasting">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kriteria 3 Wasting</label>
                        <input class="form-control" type="text" name="C3" id="ipk" placeholder="Masukkan nilai Kriteria 3 Wasting">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kriteria 4 Overweight </label>
                        <input class="form-control" type="text" name="C4" id="alpha" placeholder="Masukkan nilai Kriteria 4 Overweight">
                    </div>
                    <div class="form-group">
                        <label for="kelas">riteria 5 Stunting</label>
                        <input class="form-control" type="text" name="C5" id="alpha" placeholder="Masukkan nilai Kriteria 5 Stunting">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kriteria 6 Underweight</label>
                        <input class="form-control" type="text" name="C6" id="alpha" placeholder="Masukkan nilai Kriteria 6 Underweight">
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
                        <button id="button1" class="btn btn-lg btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
    <script>
        document.getElementById('button1').addEventListener('click', function(){
            Swal.fire({
            title: "Berhasil",
            text: "Berhasil Menambahkan Data Mahasiswa!",
            icon: "success"
            });
        })
    </script>

</body>
</html>