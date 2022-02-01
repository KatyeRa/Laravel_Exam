@extends('layouts.layout')
@section('content')

<div class="for_form">
<h3 style="margin-bottom: 20px; margin-top: 30px; text-align:center;">Авторизация</h3>

<form action="/custom-login" method="post">
    @csrf
    <div class="create">
        <label for="email" class="for_label">Введите e-mail</label>
        <input style="padding: 10px" type="email" name="email" id="email" class="for_input">
        <label for="password" class="for_label">Введите пароль</label>
        <input type="password" name="password" id="password" class="for_input">
        
        <button class="things__btn" type="submit">Отправить</button>
    </div>
</form>
</div>
@endsection