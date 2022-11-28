@include('layouts.user')

@section('umpan')

<!-- Feedback Form -->
<div class="g-bg-color--sky-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p
                class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">
                Umpan Balik</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">Send us a note</h2>
        </div>
        {{-- <form action="{{ route('umpan.store') }}" method="post"> --}}
            @csrf
            <div class="row g-margin-b-40--xs">
                <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                    <div class="g-margin-b-20--xs">
                        <input type="text"
                            class="form-control s-form-v2__input g-radius--50 @error('nama') is-invalid @enderror"
                            placeholder="* Name" name="nama">
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="g-margin-b-20--xs">
                        <input type="email"
                            class="form-control s-form-v2__input g-radius--50 @error('nama') is-invalid @enderror"
                            placeholder="* Email" name="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <input type="date"
                        class="form-control s-form-v2__input g-radius--50 @error('tanggal') is-invalid @enderror"
                        placeholder="* tanggal" name="tanggal">
                    @error('tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <textarea
                        class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs @error('pesan') is-invalid @enderror"
                        name="pesan" rows="8" placeholder="* Your message"></textarea>
                    @error('pesan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="g-text-center--xs">
                <button type="submit"
                    class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- End Feedback Form -->

@endsection