@extends('layout')

@section('contacto', 'Inicio - David Morillas')

@section('contenido')
    <h3>Contacto</h3>

    <form action="#" method="post" class="contacto_mensaje">
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>



@endsection
