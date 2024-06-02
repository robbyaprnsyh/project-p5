@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Lokasi</div>
                    <div class="card-body">
                        <form action="{{ route('lokasi.update', $lokasi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" name="nama_lokasi" value="{{ $lokasi->nama_lokasi }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" value="{{ $lokasi->provinsi }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" name="kabupaten" value="{{ $lokasi->kabupaten }}">
                            </div>
                                <a href="{{ url('lokasi') }}" class="btn btn-outline-danger">Back</a>
                                <button type="submit" class="btn btn-outline-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
