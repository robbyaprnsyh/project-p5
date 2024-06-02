@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Data Wisata</div>
                    <div class="card-body">
                        <a href="{{ route('wisata.create') }}" class="btn btn-outline-primary">Add Data</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama wisata</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Nama Lokasi</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Nama Event</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($wisata as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nama_wisata }}</td>
                                        <td>{{ $data->kategori->kategori }}</td>
                                        <td>{{ $data->lokasi->nama_lokasi }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td>{{ $data->event->tema_event }}</td>
                                        <td>
                                            <img src="{{ asset('/images/wisata/' . $data->cover) }}" width="100">
                                        </td>
                                        <form action="{{ route('wisata.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('wisata.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <a href="{{ route('wisata.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda ingin menghapus?')">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
