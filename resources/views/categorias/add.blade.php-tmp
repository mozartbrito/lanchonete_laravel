@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:40px">
    <div class="col-6">
        <h2>Nova categoria</h2>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route'=>'categorias.store', 'method'=>'post']) !!}
                        @include('categorias.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
