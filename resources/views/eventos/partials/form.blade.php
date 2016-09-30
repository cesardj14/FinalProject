<div class="form-group">
    <label for="title"><strong>Titulo: </strong></label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del evento"
           value="{{ $events->title or old('title') }}">
    <br>

    <label for="description"><strong>Descripcion: </strong></label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion del evento"
           value="{{ $events->description or old('description') }}">

    <br>

    <label for="valid_from"><strong>Valido desde: </strong></label>
    <input type="date" class="form-control" id="valid_from" name="valid_from" min="2005-01-31" max="2050-12-31" placeholder="Valido desde..."
           value="{{ $events->valid_from or old('valid_from') }}">

    <br>

    <label for="valid_to"><strong>Valido hasta: </strong></label>
    <input type="date" class="form-control" id="valid_to" name="valid_to" min="2005-01-31" max="2050-12-31" placeholder="Valido hasta..."
           value="{{ $events->valid_to or old('valid_to') }}">

    <br>

    <label for="nro_tickets"><strong>Numero de entradas</strong></label>
    <input type="number" class="form-control" id="nro_tickets" name="nro_tickets" placeholder="Numero de entradas"
           value="{{ $events->nro_tickets or old('nro_tickets') }}">

    <br>

</div>