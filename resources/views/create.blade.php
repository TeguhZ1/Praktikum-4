<html>
    <head>
        <title>Form Data Mahasiswa</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                FORM DATA MAHASISWA
            </div>
            <div class="card-body">
                <form action="{{ url('save') }}" method="post" name="add-blog-post-form" id="add-blog-post-form">
                @csrf
                    <div class="form-group mb-3">
                        NIM
                        <input type="text" id="nim" name="nim" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        NAMA
                        <input type="text" id="nama" name="nama" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        ALAMAT
                        <input type="text" id="alamat" name="alamat" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        UMUR
                        <input type="text" id="umur" name="umur" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        KOTA
                        <input type="text" id="kota" name="kota" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        KELAS
                        <input type="text" id="kelas" name="kelas" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        JURUSAN
                        <input type="text" id="jurusan" name="jurusan" class="form-control" required autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </body>
</html>
