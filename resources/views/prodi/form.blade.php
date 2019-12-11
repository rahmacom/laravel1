
@csrf

<div class="form-group row">
    <label for="kode" class="col-md-3 col-form-label text-md-right">{{ __('kode') }}</label>

    <div class="col-md-9">
        <input id="kode" type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode') }}" required autofocus>

        @error('kode')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="nama" class="col-md-3 col-form-label text-md-right">{{ __('nama prodi') }}</label>

    <div class="col-md-9">

        {!! Form::textarea('nama',null, ['class'=>'form-control']); !!}


        @error('nama')
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

        <a href="{!! route('prodi.index') !!}" class="btn btn-danger">
            {{ __('Cancel') }}
        </a>
    </div>
</div>

   


