@extends('layout')

@section('contenido')
    <h3>Miembros</h3>
    <div class="miembros">
        <ul>
            <a href="/miembros/{id}"><li>Miembro 1</li><img src="{{ asset('img/foto_de_equipo.jpeg') }}" alt=""></a>
            <a href=""><li>Miembro 2</li><img src="{{ asset('img/foto_de_equipo.jpeg') }}" alt=""></a>
            <a href=""><li>Miembro 3</li><img src="{{ asset('img/foto_de_equipo.jpeg') }}" alt=""></a>
            <a href=""><li>Miembro 4</li><img src="{{ asset('img/foto_de_equipo.jpeg') }}" alt=""></a>
            <a href=""><li>Miembro 5</li><img src="{{ asset('img/foto_de_equipo.jpeg') }}" alt=""></a>
            <a href=""><li>Miembro 6</li><img src="{{ asset('img/foto_de_equipo.jpeg') }}" alt=""></a>
        </ul>
    </div>


@endsection
