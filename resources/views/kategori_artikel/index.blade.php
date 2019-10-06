@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST KATEGORI ARTIKEL') }}</div>

                <div class="card-body">
                <table border="1">

<a class="btn btn-primary" href="{{ route('artikel.create') }}">Add Data</a>



    <tr style="background-color: pink;" >

        <th>ID </th>
        <th>NAMA </th>
        <th>USERS ID </th>
        <th>CREATE </th>
        <th>TAMPILAN </th>
    </tr>

@foreach ($kategori_artikel as $item)

    <tr>
        <td> {{ $item->id}} </td>
        <td> {{ $item->nama}} </td>
        <td> {{ $item->users_id}} </td>
        <td> {{ $item->created_at->format('d/m/Y M:i:s')}} </td>

        <td> <a class="btn btn-success" href="{{ route('kategori_artikel.show', $item->id) }}">view</a> </td>
    </tr>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


