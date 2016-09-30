<div class="form-group">
    <label for="title"><strong>Titulo: </strong></label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del evento"
           value="{{ $event->title or old('title') }}">
    <br>
    $table->string('name_events_type')
{{--
    <label for="valid_from"><strong>Valido desde: </strong></label>
    <input type="" class="form-control" id="valid_from" name="valid_from" placeholder="Valido desde..."
           value="{{ $event->valid_from or old('valid_from') }}">
           establecer tipo de evento....
--}}
    <br>

    <label for="description"><strong>Descripcion: </strong></label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion del evento"
           value="{{ $event->description or old('description') }}">

    <br>

    <label for="valid_from"><strong>Valido desde: </strong></label>
    <input type="date" class="form-control" id="valid_from" name="valid_from" placeholder="Valido desde..."
           value="{{ $event->valid_from or old('valid_from') }}">

    <br>

    <label for="valid_to"><strong>Valido hasta: </strong></label>
    <input type="date" class="form-control" id="valid_to" name="valid_to" placeholder="Valido hasta..."
           value="{{ $event->valid_to or old('valid_to') }}">

    <br>

    <label for="nro_tickets"><strong>Numero de tickets</strong></label>
    <input type="number" class="form-control" id="nro_tickets" name="nro_tickets" placeholder="Numero de Tickets"
           value="{{ $event->nro_tickets or old('nro_tickets') }}">


</div>