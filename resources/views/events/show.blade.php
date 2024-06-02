@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Data Event</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="mb-3">
                                <label class="form-label">Tema Event</label>
                                <input type="text" class="form-control" name="tema_event" value="{{ $event->tema_event }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Di Selenggarakan</label>
                                <input type="date" class="form-control" name="tgl_diselenggarakan" value="{{ $event->tgl_diselenggarakan }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lokasi</label>
                                <input type="text" class="form-control" name="id_lokasi" value="{{ $event->lokasi->nama_lokasi }}" disabled>
                            </div>
                                <a href="{{ url('event') }}" class="btn btn-outline-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
