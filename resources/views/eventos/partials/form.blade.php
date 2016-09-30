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
    <input type="date" class="form-control" id="valid_from" name="valid_from" placeholder="Valido desde..."
           value="{{ $events->valid_from or old('valid_from') }}">

    <br>

    <label for="valid_to"><strong>Valido hasta: </strong></label>
    <input type="date" class="form-control" id="valid_to" name="valid_to" placeholder="Valido hasta..."
           value="{{ $events->valid_to or old('valid_to') }}">

    <br>

</div>