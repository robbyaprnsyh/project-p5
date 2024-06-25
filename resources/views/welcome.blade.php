<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <!-- Awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisata.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                {{-- <form class="d-flex">
                    <a href="{{ url('/login') }}" class="btn btn-outline-light">Login</a>
                </form> --}}
            </div>
        </div>
    </nav>
    <!-- Akhir navbar -->

    <!-- Awal content -->
    <div class="section">
        <div class="container">
            <div class="row mt-5">
                <h1>Destinasi Wisata</h1>
            </div>
            <div class="row d-flex justify-content-start align-items-center p-2">
                @foreach ($wisata as $data)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-3">
                        <div class="card" style="width: 100%;">
                            <img src="{{ asset('/images/wisata/' . $data->cover) }}" class="img-fluid"
                                alt="{{ $data->nama_wisata }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_wisata }}</h5>
                                <p class="card-text">{{ $data->lokasi->nama_lokasi }}</p>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#detailModal{{ $data->id }}">Lihat Detail</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="detailModal{{ $data->id }}" tabindex="-1"
                        aria-labelledby="detailModalLabel{{ $data->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModalLabel{{ $data->id }}">
                                        {{ $data->nama_wisata }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ asset('/images/wisata/' . $data->cover) }}"
                                                class="img-fluid mb-3" alt="{{ $data->nama_wisata }}">
                                        </div>
                                        <div class="col-md-8">
                                            <p><strong>Deskripsi:</strong> {{ $data->deskripsi }}</p>
                                            <p><strong>Kategori:</strong> {{ $data->kategori->kategori }}</p>
                                            <p><strong>Lokasi:</strong> {{ $data->lokasi->nama_lokasi }}</p>
                                            <p><strong>Event:</strong> {{ $data->event->tema_event }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- Akhir content -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
