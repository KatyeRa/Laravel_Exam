@extends('layouts.layout')
@section('content')

    <form method="post" action="/thingupdate/{{$things->id}}"> 
        @csrf

        <h1 style="margin-bottom: 20px; margin-top: 30px; text-align:center;">Изменение вещи</h1>
        <div class="create">
            <label for="name">Название</label>
            <input style="padding: 10px" type="text" name="name" id="name" placeholder="Введите название" value="{{$things->name}}">
            <label for="description">Описание</label>
            <input style="padding: 10px" type="text" name="description" id="description" value="{{$things->description}}">
            <label for="wrnt">Срок годности</label>
            <input style="padding: 10px" type="text" name="wrnt" id="wrnt" value="{{$things->wrnt}}">
            <button class="things__btn"type="submit">Отправить</button>
        </div>
    </form>
@endsection