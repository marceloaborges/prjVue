@extends('adminlte::page')

@section('page',"Home")

@section('content_header')
    <h1 class="bg-white">Dashboard</h1>
@stop


@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div>

<example-component></example-component>
@stop
