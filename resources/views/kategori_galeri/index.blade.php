@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST KATEGORI GALERI') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('kategori_galeri.create') }}">Add Data</a>

                <div class="form-group row">
                    <div class="table-responsive">
                        <table class="table table-stripped table-bordered">
                            <thead align="center" style="background-color: pink;">
                                <th> ID </th>
                                <th> NAMA </th>
                                <th> USERS ID </th>
                                <th> CREATE </th>
                                <th> UPDATE </th>
                                <th>TAMPILAN </th>
                            </thead>
                            <tbody>

@foreach ($kategori_galeri as $item)

                            <tr>
                                <td> {{ $item->id}} </td>
                                <td> {{ $item->nama}} </td>
                                <td> {{ $item->users_id}} </td>
                                <td> {{ $item->created_at->format('d/m/Y M:i:s')}} </td>
                                <td> {{ $item->updated_at->format('d/m/Y M:i:s')}} </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-success" href="{{ route('kategori_galeri.show', $item->id) }}">view</a>
                                        <a class="btn btn-info" href="{{ route('kategori_galeri.edit', $item->id) }}">edit</a>
                                        {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id], 'method' => 'delete']) !!}
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

