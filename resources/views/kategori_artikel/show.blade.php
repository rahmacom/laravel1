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
                        <label for="users_id" class="col-md-6 col-form-label text-md-left">{{ $kategori_artikel->id }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">nama</label>
                            <label for="name" class="col-md-6 col-form-label text-md-left">{{ $kategori_artikel->nama }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="users_id" class="col-md-4 col-form-label text-md-left">users_id</label>
                            <label for="users_id" class="col-md-6 col-form-label text-md-left">{{ $kategori_artikel->users_id }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="create" class="col-md-4 col-form-label text-md-left">created_at</label>
                            <label for="create" class="col-md-6 col-form-label text-md-left">{{ $kategori_artikel->created_at }}</label>
                    </div>

                    <div class="form-group row">
                            <label for="update" class="col-md-4 col-form-label text-md-left">updated_at</label>
                            <label for="update" class="col-md-6 col-form-label text-md-left">{{ $kategori_artikel->updated_at }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
