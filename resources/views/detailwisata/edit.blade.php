@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Detail Objek Wisata
                    </div>
                    <div class="card-body">
                        <form action="{{ route('detailwisata.update', $detailwisata->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Wisata</label>
                                <input type="text" class="form-control  @error('id_wisata') is-invalid @enderror"
                                    name="id_wisata" value="{{ $detailwisata->id_wisata }}">
                                @error('id_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gambar Wisata</label>
                                @if (isset($detailwisata) && $detailwisata->id_wisata)
                                    <p>
                                        <img src="{{ asset('images/detailwisata/' . $detailwisata->id_wisata) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('id_wisata') is-invalid @enderror"
                                    name="id_wisata" value="{{ $detailwisata->id_wisata }}">
                                @error('id_wisata')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Selengkapnya</label>
                                <textarea class="form-control  @error('deskripsi_selengkapnya') is-invalid @enderror" name="deskripsi_selengkapnya">{{ $detailwisata->deskripsi_selengkapnya }}</textarea>
                                @error('deskripsi_selengkapnya')
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