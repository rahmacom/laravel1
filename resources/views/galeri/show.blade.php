@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('show') }}</div>

                <div class="card-body">
                    <div class="form-group row">
                        <label for="users_id" class="col-md-4 col-form-label text-md-lesft">id</label>
                        <label for="users_id" class="col-md-6 col-form-label text-md-left">{{ $galeri->id }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-left">nama</label>
                            <label for="nama" class="col-md-6 col-form-label text-md-left">{{ $galeri-->nama }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
