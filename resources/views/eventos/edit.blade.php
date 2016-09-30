@extends('layouts.app')

@section('title', 'Editar eventos')

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        <form action="{{ url('/eventos'.Event::id) }}" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}
            @include('eventos.partials.form')
            <div class="form-group">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-floppy-disk"></span> Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection