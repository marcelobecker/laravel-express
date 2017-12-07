@extends('template')

@section('title')
    Pagina do Marcelo
@stop

@section('content')
    <h1>Blog do Marcelo</h1>
    <ul>
        @foreach($blogs as $blog)
            <h1>{{$blog[0]}}</h1>
            <li>{{$blog[1]}}</li>
            <hr>
        @endforeach
    </ul>
@stop
