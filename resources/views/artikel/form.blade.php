@csrf

<div class="form-group row">
    <label for="judul" class="col-md-3 col-form-label text-md-right">{{ __('judul') }}</label>

    <div class="col-md-6">
        {!! Form::text('judul', null,['class'=> 'form-control', 'value' => old('judul'), 'required', 'autofocus']) !!}
    </div>
</div>

<div class="form-group row">
    <label for="isi" class="col-md-3 col-form-label text-md-right">{{ __('isi') }}</label>

    <div class="col-md-9">
        {!! Form::textarea('isi', null,['class'=> 'form-control', 'value' => old('isi'), 'required', 'autofocus']) !!}

        @error('isi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="users_id" class="col-md-3 col-form-label text-md-right">{{ __('users_id') }}</label>

    <div class="col-md-9">
        <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::id() }}" required>

        @error('users_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="kategori_artikel" class="col-md-3 col-form-label text-md-right">{{ __('kategori_artikel') }}</label>

    <div class="col-md-9">
        {!! Form::select('kategori_artikel_id', $kategori_artikel, null, ['class' => 'form-control']) !!}

        @error('kategori_artikel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-9 offset-md-3">
        <button type="submit" class="btn btn-primary">
            {{ __('Save Data') }}
        </button>

        <a href="{!! route('artikel.index') !!}" class="btn btn-danger">
            {{ __('Cancel') }}
        </a>
    </div>
</div>

    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

    <script>
         CKEDITOR.replace( 'isi' );
    </script>


