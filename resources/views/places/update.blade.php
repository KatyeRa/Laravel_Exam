@extends('layouts.layout')
@section('content')

    <form method="post" action="/placeupdate/{{$places->id}}"> 
        @csrf

        <h1 style="margin-bottom: 20px; margin-top: 30px">Изменение места</h1>
        <div class="create">
            <label for="name">Название</label>
            <input style="padding: 10px" type="text" name="name" id="name" placeholder="Введите название" value="{{$places->name}}">
            <label for="description">Описание</label>
            <input style="padding: 10px" type="text" name="description" id="description" value="{{$places->description}}">
            <label for="repair">На починке</label>
            <input style="padding: 10px" type="boolean" name="repair" id="repair" value="{{$places->repair}}">
            <label for="work">В работе</label>
            <input style="padding: 10px" type="boolean" name="work" id="work" value="{{$places->work}}">
            <button class="things__btn" type="submit">Отправить</button>
        </div>
    </form>
@endsection