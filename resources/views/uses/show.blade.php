@extends('layouts.layout')
@section('content')
    <div class="for_spisok">
    <a href="/givething" class="link">Передать вещь</a>
    @foreach($uses as $use)
        <div class="show_container">
        <ul class="spisok">
            <li><strong>ID вещи:</strong> {{$use->thing_id}}</li>
            <li><strong>ID места:</strong> {{$use->place_id}}</li>
            <li><strong>ID пользователя:</strong> {{$use->user_id}}</li>
            <li><strong>Количество вещей:</strong> {{$use->amount}}</li>
        </ul>
        <a href="/updateuse/{{$use->id}}" class="link_make">Изменить</a>
        </div>
    @endforeach
    </div>



@endsection