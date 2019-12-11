@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST PRODI') }}</div>

                <div class="card-body">

<a class="btn btn-primary" href="{{ route('prodi.create') }}">Add Data</a>

<table border="2">
    <tr style="background-color: pink;" >
        <th> ID </th>
        <th> KODE </th>
        <th> NAMA </th>
        <th> TAMPIL </th>
    </tr>

@foreach ($Prodi as $item)

    <tr>
        <td> {{ $item->id}} </td>
        <td> {{ $item->kode}} </td>
        <td> {{ $item->nama}} </td>
        <td> {{ $item->tampil}} </td>
    </tr>

@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

