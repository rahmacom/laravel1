
@csrf

<div class="form-group row">
    <label for="nim" class="col-md-3 col-form-label text-md-right">{{ __('nim') }}</label>

    <div class="col-md-9">
        <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autofocus>

        @error('nim')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="nama" class="col-md-3 col-form-label text-md-right">{{ __('nama ') }}</label>

    <div class="col-md-9">

        {!! Form::textarea('nama',null, ['class'=>'form-control']); !!}


        @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="alamat" class="col-md-3 col-form-label text-md-right">{{ __('alamat') }}</label>

    <div class="col-md-9">
        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autofocus>

        @error('alamat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="Prodi " class="col-md-3 col-form-label text-md-right">{{ __('Prodi') }}</label>

    <div class="col-md-9">
        {!! Form::select('id_table_prodi', $Prodi, null, ['class' => 'form-control']) !!}

        @error('Prodi')
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

        <a href="{!! route('mahasiswa.index') !!}" class="btn btn-danger">
            {{ __('Cancel') }}
        </a>
    </div>
</div>

   


