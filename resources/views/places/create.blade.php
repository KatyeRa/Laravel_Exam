@extends('layouts.layout')
@section('content')

    <form method="post" action="/place"> 
        @csrf

        <h1 style="margin-bottom: 20px; margin-top: 30px">Создание места</h1>
        <div class="create">
            <label for="name">Название:</label>
            <input style="padding: 10px" type="text" name="name" id="name" placeholder="Введите название">
            <label for="description">Описание</label>
            <input style="padding: 10px" type="text" name="description" placeholder="Введите описание" id="description">
            <button class="things__btn" type="submit">Отправить</button>
        </div>
    </form>
@endsection