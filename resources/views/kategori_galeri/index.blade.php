@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST KATEGORI GALERI') }}</div>

                <div class="card-body">

<a class="btn btn-primary" href="{{ route('galeri.create') }}">Add Data</a>

<table border="1">
   <tr style="background-color: pink;" >
        <th> ID </th>
        <th> NAMA </th>
        <th> ID USER </th>
        <th> CREATE </th>
        <th> TAMPILAN </th>

    </tr>

@foreach ($kategori_galeri as $item)

    <tr>
        <td> {{ $item->id }} </td>
        <td> {{ $item->nama }} </td>
        <td> {{ $item->users_id }} </td>
        <td> {{ $item->created_at->format('d/m/Y M:i:s')}} </td>
         <td> <a href="{{ route('kategori_galeri.show', $item->id) }}">view</a> </td>
    </tr>

@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

