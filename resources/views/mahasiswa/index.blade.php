@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST MAHASISWA') }}</div>

                <div class="card-body">

<a class="btn btn-primary" href="{{ route('mahasiswa.create') }}">Add Data</a>

<table border="2">
    <tr style="background-color: pink;" >
        <th> ID </th>
        <th> NIM </th>
        <th> NAMA </th>
        <th> ALAMAT </th>
        <th> TAMPIL </th>
        <th> ID PRODI </th>

    </tr>

@foreach ($Mahasiswa as $item)

    <tr>
        <td> {{ $item->id}} </td>
        <td> {{ $item->nim}} </td>
        <td> {{ $item->nama}} </td>
        <td> {{ $item->alamat}} </td>
        <td> {{ $item->tampil}} </td>
        <td> {{ $item->id_prodi}} </td>
    </tr>

@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

