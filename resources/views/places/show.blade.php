@extends('layouts.layout')
@section('content')
    <div class="for_spisok">
    <a href="/createplace" class="link">Создать место</a>
    @foreach($places as $place)
        <div class="show_container">
        <ul class="spisok">
            <li><strong> Название места: </strong>{{$place->name}}</li>
            <li><strong> Описание: </strong> {{$place->description}}</li>
            <li><strong> На починке: </strong> {{$place->repair}}</li>
            <li><strong> В работе: </strong> {{$place->work}}</li>
            <li><strong> ID места: </strong> {{$place->id}}</li>
        </ul>
        <a href="/deleteplace/{{$place->id}}" class="link_make">Удалить</a>
        <a href="/updateplace/{{$place->id}}" class="link_make">Изменить</a>
        </div>
    @endforeach
    </div>



@endsection