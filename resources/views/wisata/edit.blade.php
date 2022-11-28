@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Objek Wisata
                    </div>
                    <div class="card-body">
                        <form action="{{ route('wisata.update', $wisata->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Gambar Wisata</label>
                                @if (isset($wisata) && $wisata->galeri)
                                    <p>
                                        <img src="{{ asset('images/wisata/' . $wisata->galeri) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('galeri') is-invalid @enderror"
                                    name="galeri" value="{{ $wisata->galeri }}">
                                @error('galeri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Wisata</label>
                                <input type="text" class="form-control  @error('nama_wisata') is-invalid @enderror"
                                    name="nama_wisata" value="{{ $wisata->nama_wisata }}">
                                @error('nama_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Wisata</label>
                                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi">{{ $wisata->deskripsi }}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi</label>
                                <textarea class="form-control  @error('lokasi') is-invalid @enderror" name="lokasi">{{ $wisata->lokasi }}</textarea>
                                @error('lokasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection