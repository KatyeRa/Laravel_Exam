@extends('layouts.layout')
@section('content')
    <div class="for_spisok">
    <a href="/creatething" class="link">Создать вещь</a>
    @foreach($things as $thing)
        <div class="show_container">
        <ul class="spisok">
            <li><strong>Название вещи:</strong> {{$thing->name}}</li>
            <li><strong>Описание</strong> {{$thing->description}}</li>
            <li><strong>Срок годности:</strong> {{$thing->wrnt}}</li>
            <li><strong>ID создателя:</strong> {{$thing->master}}</li>
        </ul>
        <a href="/deletething/{{$thing->id}}" class="link_make">Удалить</a>
        <a href="/updatething/{{$thing->id}}" class="link_make">Изменить</a>
        </div>
    @endforeach
    </div>


@endsection