@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('paquetes.create') }}" class="btn btn-primary btn-sn"><span
                            class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;Nuevo Paquete</a>
                <br><br>
            </div>
        </div>
    </div>

    @endsection