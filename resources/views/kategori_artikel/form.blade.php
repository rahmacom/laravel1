
@csrf

<div class="form-group row">
    <label for="nama" class="col-md-3 col-form-label text-md-right">{{ __('nama') }}</label>

    <div class="col-md-9">
        {!! Form::text('nama', null,['class'=>" form-control",'required','autofocus']) !!} 
        @error('nama')
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

<div class="form-group row mb-0">
    <div class="col-md-9 offset-md-3">
        <button type="submit" class="btn btn-primary">
            {{ __('Save Data') }}
        </button>

        <a href="{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
            {{ __('Cancel') }}
        </a>
    </div>
</div>

    <script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

    <script> 
         CKEDITOR.replace( 'isi' ); 
    </script>


