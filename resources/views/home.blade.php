@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div style="color:red" class="card-header fs-2 ">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="row mt-4 mx-3 mx-lg-0">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-black mb-4">
                            <div class="card-body fw-bolder fs-4 d-flex justify-content-between">Lokasi
                            </div>
                            <div class="card-footer ">
                                <a class="small  text-black" href="{{ url('/lokasi') }}" style="text-decoration:none;">Lihat
                                    Detail </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-black mb-4">
                            <div class="card-body fw-bolder fs-4 d-flex justify-content-between">Kategori
                            </div>
                            <div class="card-footer">
                                <a class="small text-black" href="{{ url('/kategori') }}"
                                    style="text-decoration:none;">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-black mb-4">
                            <div class="card-body fw-bolder fs-4 d-flex justify-content-between">Event
                            </div>
                            <div class="card-footer">
                                <a class="small text-black" href="{{ url('/event') }}" style="text-decoration:none;">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-light text-black mb-4">
                            <div class="card-body fw-bolder fs-4 d-flex justify-content-between">Wisata
                            </div>
                            <div class="card-footer">
                                <a class="small text-black" href="{{ url('/wisata') }}" style="text-decoration:none;">Lihat
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
