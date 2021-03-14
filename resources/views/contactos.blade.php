@extends('plantilla')
@section('titulo', 'Contacto')
@section('Contenido')
<h1>Contacto</h1>

@foreach ($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach
<form method="post" action={{ route('Contact')}}>
    @csrf
    <input name="nombre" placeholder="Nombre" value>
    <input type="email" name="email" placeholder="Email" value>
    <input name="subject" placeholder="Asunto" value>
    <textarea name="contenido" placeholder="Mensaje"></textarea>
    <button>Enviar</button>
</form>
@endsection
@endsection
