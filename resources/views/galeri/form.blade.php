@csrf

<div class="form-group row">
    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('nama') }}</label>

    <div class="col-md-6">
        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autofocus>

        @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('keterangan') }}</label>

    <div class="col-md-6">
        <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autofocus>

        @error('keterangan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="path" class="col-md-4 col-form-label text-md-right">{{ __('path') }}</label>

    <div class="col-md-6">
        <input id="path" type="text" class="form-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>

        @error('path')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="users_id" class="col-md-4 col-form-label text-md-right">{{ __('users_id') }}</label>

    <div class="col-md-6">
        <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required autofocus>

        @error('users_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="kategori_galeri" class="col-md-4 col-form-label text-md-right">{{ __('kategori_galeri') }}</label>

    <div class="col-md-6">
        {!! Form::select('kategori_galeri_id', $kategori_galeri, null, ['class' => 'form-control']) !!}

        @error('kategori_galeri')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Save Data') }}
        </button>

        <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">
            {{ __('Cancel') }}
        </a>
    </div>
</div>

