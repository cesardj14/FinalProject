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
    <input type="date" class="form-control" id="valid_from" name="valid_from" placeholder="Valido desde..."
           value="{{ $package->valid_from or old('valid_from') }}">

    <br>

    <label for="valid_to"><strong>Valido hasta: </strong></label>
    <input type="date" class="form-control" id="valid_to" name="valid_to" placeholder="Valido hasta..."
           value="{{ $package->valid_to or old('valid_to') }}">

    <br>

    <label for="nro_tickets"><strong>Numero de entradas</strong></label>
    <input type="number" class="form-control" id="nro_tickets" name="nro_tickets" placeholder="Numero de entradas"
           value="{{ $package->nro_tickets or old('nro_tickets') }}">

    <br>

    <label for="price"><strong>Precio (Bs.): </strong></label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Precio"
           value="{{ $package->price or old('price') }}">

    <br>

        <label for="foto"><strong>Foto</strong></label>
        <input type="file" class="form-control" id="foto" name="foto">
    </div>





</div>