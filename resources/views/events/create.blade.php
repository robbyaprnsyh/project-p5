@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Data Event</div>
                    <div class="card-body">
                        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Tema Event</label>
                                <input type="text" class="form-control" name="tema_event">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Di Selenggrakan</label>
                                <input type="date" class="form-control" name="tgl_diselenggarakan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lokasi</label>
                                <select class="form-control" name="id_lokasi">
                                @foreach ($lokasi as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_lokasi }}</option>
                                @endforeach
                                </select>
                            </div>
                            <a href="{{ url('event') }}" class="btn btn-outline-danger">Back</a>
                            <button type="submit" class="btn btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
