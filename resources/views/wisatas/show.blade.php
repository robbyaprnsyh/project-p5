@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Data Wisata</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <label class="form-label">Nama Wisata</label>
                                <input type="text" class="form-control" name="nama_wisata"
                                    value="{{ $wisata->nama_wisata }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" name="id_kategori"
                                    value="{{ $wisata->kategori->kategori }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" name="id_lokasi"
                                    value="{{ $wisata->lokasi->nama_lokasi }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" value="{{ $wisata->deskripsi }}"
                                    disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cover</label>
                                <img name="cover" src="{{ asset('/images/wisata/' . $wisata->cover) }}" width="100">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Event</label>
                                <input type="text" class="form-control" name="id_event"
                                    value="{{ $wisata->event->tema_event }}" disabled>
                            </div>
                            <a href="{{ url('wisata') }}" class="btn btn-outline-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
