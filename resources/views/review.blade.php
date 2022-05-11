@extends('layout')
@section('title')Отзывы@endsection

@section('main_content')
    <h1>Форма добавления отзыва о клубе</h1>

    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="mail" name="mail"  id="mail" placeholder="Введите email" class="form-control mb-2">
        <input type="text" name="subject"  id="subject" placeholder="Введите отзыв" class="form-control mb-2">
        <textarea name="message" id="message" class="form-control mb-2" placeholder="Введите сообщение"></textarea>
        <button type="submit" class="btn btn-danger">Отправить</button>
    </form>
    <h1 class="mt-5">Все отзывы</h1>
    @foreach($reviews as $el)
        <div class="alert alert-success">
            <h4>{{ $el->subject }}</h4>
            <b>{{ $el->mail }}</b>
            <p>{{ $el->message }}</p>
        </div>

    @endforeach
@endsection
