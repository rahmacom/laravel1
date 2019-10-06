@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST GALERI') }}</div>

                <div class="card-body">

<a class="btn btn-primary" href="{{ route('berita.create') }}">Add Data</a>

<table border="1">
    <tr style="background-color: pink;" >
        <th> ID </th>
        <th> NAMAL </th>
        <th> KETERANGAN </th>
        <th> PATH </th>
        <th> USERS ID </th>
        <th>TAMPILAN </th>
    </tr>

@foreach ($galeri as $item)

    <tr>
        <td> {{ $item-> id}} </td>
        <td> {{ $item-> nama}} </td>
        <td> {{ $item-> keterangan}} </td>
        <td> {{ $item-> path }} </td>
        <td> {{ $item-> users_id}} </td>
        <td> <a class="btn btn-success" href="{{ route('galeri.show', $item->id) }}">view</a> </td>
    </tr>


@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
