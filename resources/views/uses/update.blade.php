@extends('layouts.layout')
@section('content')

    <form method="post" action="/useupdate/{{$uses->id}}"> 
        @csrf

        <h1 style="margin-bottom: 20px; margin-top: 30px; text-align:center;">Изменение использования</h1>
        <div class="create">
            <label for="place_id">Идентификатор места</label>
            <input style="padding: 10px" type="number" name="place_id" id="place_id" value="{{$uses->place_id}}">
            <button class="things__btn" type="submit">Отправить</button>
        </div>
    </form>
@endsection