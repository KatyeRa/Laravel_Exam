@extends('layouts.layout')
@section('content')

    <form method="post" action="/thinggive"> 
        @csrf

        <h1 style="margin-bottom: 20px; margin-top: 30px; text-align:center;">Передача вещи</h1>
        <div class="create">
            <label for="thing_id">ID вещи</label>
            <input style="padding: 10px" type="number" name="thing_id" id="thing_id">
            <label for="to_id">ID пользователя, кому передается вещь</label>
            <input style="padding: 10px" type="number" name="to_id" id="to_id">
            <button class="things__btn" type="submit">Отправить</button>
        </div>
    </form>
@endsection