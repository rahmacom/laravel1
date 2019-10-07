@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Artikel') }}</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'artikel.store', 'method' => 'POST']) !!}
                        
                        @include('artikel.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



     
