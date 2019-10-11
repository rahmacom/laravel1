@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LIST PENGUMUMAN') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('pengumuman.create') }}">Add Data</a>

                <div class="form-group row">
                    <div class="table-responsive">
                        <table class="table table-stripped table-bordered">
                        <thead align="center" style="background-color: pink;">

                            <th> ID </th>
                            <th> JUDUL </th>
                            <th> ISI </th>
                            <th> ID USER </th>
                            <th> CREATE </th>
                            <th> UPDATE </th>
                            <th> TAMPILAN </th>
                        </tr>

@foreach ($pengumuman as $item)

                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->judul }} </td>
                            <td> {!! $item->isi !!} </td>
                            <td> {{ $item->users_id }} </td>
                            <td> {{ $item->created_at->format('d/m/Y M:i:s')}} </td>
                            <td> {{ $item->updated_at->format('d/m/Y M:i:s')}} </td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="{{ route('pengumuman.show', $item->id) }}">view</a>
                                    <a class="btn btn-info" href="{{ route('pengumuman.edit', $item->id) }}">edit</a>
                                    {!! Form::open(['route' => ['pengumuman.destroy', $item->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('delete', ['class' => 'btn btn-warning']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>

@endforeach
          		</div>
            </div>
        </div>
    </div>
</div>

@endsection

