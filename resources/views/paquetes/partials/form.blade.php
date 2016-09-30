<div class="form-group">
    <label for="title"><strong>Titulo: </strong></label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del paquete"
           value="{{ $package->title or old('title') }}">
    <br>

    <label for="destiny"><strong>Destino: </strong></label>
    <input type="text" class="form-control" id="destiny" name="destiny" placeholder="Destino del paquete"
           value="{{ $package->destiny or old('destiny') }}">

    <br>

    <label for="description"><strong>Descripcion: </strong></label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion del paquete"
           value="{{ $package->description or old('description') }}">

    <br>

    <label for="valid_from"><strong>Valido desde: </strong></label>
    <input type="date" class="form-control" id="valid_from" name="valid_from" placeholder="..."
           value="{{ $package->valid_from or old('valid_from') }}">


</div>