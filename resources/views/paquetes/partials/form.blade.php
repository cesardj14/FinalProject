@extends('layouts.app');

<div class="form-group">
    <label for="title"><strong>Titulo: </strong></label>
    <input type="text" class="form-control" id="titulop" name="titulop" placeholder="Titulo del paquete"
           value="{{ $packages->title or old('title') }}">
</div>