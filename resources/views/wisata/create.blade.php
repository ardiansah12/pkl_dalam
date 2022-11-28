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
                        <form action="{{ route('wisata.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Gambar Wisata</label>
                                <input type="file" class="form-control  @error('galeri') is-invalid @enderror"
                                    name="galeri">
                                @error('galeri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Wisata</label>
                                <input type="text" class="form-control  @error('nama_wisata') is-invalid @enderror"
                                    name="nama_wisata">
                                @error('nama_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Wisata</label>
                                <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lokasi </label>
                                <textarea class="form-control  @error('lokasi') is-invalid @enderror" name="lokasi"></textarea>
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
