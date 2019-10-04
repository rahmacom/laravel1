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
                        <label for="users_id" class="col-md-6 col-form-label text-md-left">{{ $artikel->id }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-left">nama</label>
                            <label for="judul" class="col-md-6 col-form-label text-md-left">{{ $artikel->judul }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
