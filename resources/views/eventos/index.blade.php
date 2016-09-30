@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/eventos/create') }}" class="btn btn-primary btn-sn"><span
                            class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;Nuevo Evento</a>
                <br><br>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">Titulo</th>
                                <th class="text-center">Lugar</th>
                                <th class="text-center">Descripcion</th>
                                <th class="text-center">Valido Desde</th>
                                <th class="text-center">Valido Hasta</th>
                                <th class="text-center">Numero de tickets</th>
                            </tr>


                            @foreach($events as $event)
                                <tr>

                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->destiny }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>{{ $event->valid_from }}</td>
                                    <td>{{ $event->valid_to }}</td>
                                    <td>{{ $event->nro_tickets }}</td>
                                    <td>ge

                                        <table>
                                            <tr>
                                                <td>
                                                    <a href="{{ url('/eventos/'.$event->id.'/edit/') }}"
                                                       class="btn btn-primary btn-sm"><span
                                                                class="glyphicon glyphicon-pencil"
                                                                aria-hidden="true"></span></a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('/logout') }}" class="btn btn-danger btn-sm"
                                                       onclick="event.preventDefault();
                                                 document.getElementById('delete-form').submit();">
                                                <span
                                                        class="glyphicon glyphicon-trash"
                                                        aria-hidden="true"></span>
                                                    </a>

                                                    <form id="delete-form" action="{{ url('/eventos/'.$package->id) }}" method="POST"
                                                          style="display: none;">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection