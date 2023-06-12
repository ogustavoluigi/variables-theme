@extends('template.'.config('settings.template').'.content.layout')
@section('content')
    <div>
        <h1>{{$content->title}}</h1>
        <br><br>
        <x-form id-name="comentarios" channels="comentarios">
            <label>Name:</label><br>
            <input type="text" name="name"><br><br>
            <label>Comment:</label><br>
            <textarea name="comment" cols="30" rows="10"></textarea><br><br>
            <button type="submit">Enviar</button>
        </x-form>
    </div>
@stop