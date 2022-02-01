@extends('layouts.layout')
@section('content')

    <form method="post" action="/thing"> 
        @csrf

        <h1 style="margin-bottom: 20px; margin-top: 30px">Создание вещи</h1>
        <div class="create">
            <label for="name">Имя</label>
            <input style="padding: 10px" type="text" name="name" id="name" placeholder="Введите название">
            <label for="description">Описание</label>
            <input style="padding: 10px" type="text" name="description" id="description" placeholder="Введите описание">
            <label for="wrnt">Срок годности</label>
            <input style="padding: 10px"type="text" name="wrnt" id="wrnt" placeholder="Введите дату">
            <button class="things__btn" type="submit">Отправить</button>
        </div>
    </form>
@endsection