
@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Detail Objek Wisata
                    </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" name="id_wisata" value="{{ $wisata->id_wisata }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar Wisata</label>
                            @if (isset($detailwisata) && $detailwisata->galeri)
                                <p>
                                    <img src="{{ asset('images/wali/' . $detailwisata->galeri) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi Selengkapnya</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $wisata->deskripsi }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('detailwisata.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
