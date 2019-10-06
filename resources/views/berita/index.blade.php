@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST BERITA') }}</div>

                <div class="card-body">

<a class="btn btn-primary" href="{{ route('berita.create') }}">Add Data</a>

<table border="1">
    <tr style="background-color: pink;" >
        <th> ID </th>
        <th> JUDUL </th>
        <th> ISI </th>
        <th> USERS ID </th>
        <th>TAMPILAN </th>
    </tr>

@foreach ($berita as $item)

    <tr>
        <td> {{ $item-> id}} </td>
        <td> {{ $item-> judul}} </td>
        <td> {{ $item-> isi}} </td>
        <td> {{ $item-> users_id}} </td>
        <td> <a class="btn btn-success" href="{{ route('berita.show', $item->id) }}">view</a> </td>
    </tr>


@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
