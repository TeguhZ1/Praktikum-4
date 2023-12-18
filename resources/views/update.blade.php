<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Update Data Mahasiswa</title>
    </head>
    <body>
        <div class="container mt-4">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="container">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Update Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="{{ url('edit') }}" method="post" name="add-blog-post-form" id="add-blog-post-form">
                @csrf
                    <div class="form-group mb-3">
                        NIM
                        <input type="text" id="nim" name="nim" class="form-control" value="{{ $data->nim }}" readonly>
                    </div>
                    <div class="form-group mb-3">
                        Nama
                        <input type="text" id="nama" name="nama" class="form-control" value="{{ $data->nama }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        Alamat
                        <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $data->alamat }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        Umur
                        <input type="text" id="umur" name="umur" class="form-control" value="{{ $data->umur }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        Kota
                        <input type="text" id="kota" name="kota" class="form-control" value="{{ $data->kota }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        Kelas
                        <input type="text" id="kelas" name="kelas" class="form-control" value="{{ $data->kelas }}" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        Jurusan
                        <input type="text" id="jurusan" name="jurusan" class="form-control" value="{{ $data->jurusan }}" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>
