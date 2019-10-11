@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST KATEGORI BERITA') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('kategori_berita.create') }}">Add Data</a>

                <div class="form-group row">
                    <div class="table-responsive">
                        <table class="table table-stripped table-bordered">
                            <thead align="center" style="background-color: pink;">

                                <th> ID </th>
                                <th> NAMA </th>
                                <th> USERS ID </th>
                                <th> CREATE </th>
                                <th> UPDATE </th>
                                <th> TAMPILAN </th>
                            </thead>
                        <tbody>

@foreach ($kategori_berita as $item)

                            <tr>
                                <td> {{ $item->id}} </td>
                                <td> {{ $item->nama}} </td>
                                <td> {{ $item->users_id}} </td>
                                <td> {{ $item->created_at->format('d/m/Y M:i:s')}} </td>
                                <td> {{ $item->updated_at->format('d/m/Y M:i:s')}} </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('kategori_berita.show', $item->id) }}">view</a>
                                        <a class="btn btn-info" href="{{ route('kategori_berita.edit', $item->id) }}">edit</a>
                                        {!! Form::open(['route' => ['kategori_berita.destroy', $item->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('delete', ['class' => 'btn btn-warning']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>

@endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
