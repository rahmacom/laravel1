@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('show') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="id user" class="col-md-4 col-form-label text-md-lesft">id</label>
                        <label for="id user" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->id }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">nama</label>
                            <label for="name" class="col-md-6 col-form-label text-md-left">{{ $pengumuman->nama }}</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
