@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Data Lokasi</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <label class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" name="nama_lokasi" value="{{ $lokasi->nama_lokasi }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" value="{{ $lokasi->provinsi }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" name="kabupaten" value="{{ $lokasi->kabupaten }}" disabled>
                            </div>
                                <a href="{{ url('lokasi') }}" class="btn btn-outline-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
