@extends('layout')
@section('title')Обновление новости@endsection
@section('main_content')

    <h1>Форма обновления футбольной новости</h1>

    @if($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('update_news_submit', $data->id)}}" enctype="multipart/form-data" >
        @csrf
        <h6>Тема раздела</h6>
        <input type="text" name="theme"  id="theme" value="{{ $data->theme }}" placeholder="Введите тему раздела" class="form-control mb-2">
        <h6>Заголовок статьи</h6>
        <input type="text" name="title"  id="title" value="{{ $data->title }}" placeholder="Введите название новости" class="form-control mb-2">
        <h6>Краткий обзор</h6>
        <input type="text" name="short_news" value="{{ $data->short_news }}" id="short_news" placeholder="Тезисно о новости" class="form-control mb-2">
        <h6>Имя автора</h6>
        <input type="text" name="author"  id="author" value="{{$data->author}}" placeholder="Введите имя автора" class="form-control mb-2">
        <h6>Новость</h6>
        <textarea name="news_subject" id="news_subject"  class="form-control mb-2" placeholder="Введите новость">{{$data->news_subject}}</textarea>
        <div class="card" style="width: 18rem;">

                <input accept="image/*" type='file' id="image" />
                <img id="image_top" src="#" alt="your image" />
                <img id="image_top" src="#" alt="your image" />

{{--            <img src="{{ asset('/storage/'. $data->image) }}" class="card-img-top" alt="...">--}}
            <div class="card-body">
{{--                <h5 class="card-title">Card title</h5>--}}
{{--                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                <a href="#" class="btn btn-primary">Go somewhere</a>--}}
{{--                <input type="file" name="image" id="image">--}}
{{--                <button class="btn btn-default" type="onclick">Добавить</button>--}}
            </div>
        </div>
{{--            <div class="image_update">--}}
{{--                @isset($path)--}}
{{--                    <img src="{{ asset('/storage/'. $path) }}" class="img-fluid" alt="" style="max-width: 300px">--}}
{{--                @endisset--}}
{{--                    <img src="{{ asset('/storage/'. $data->image) }}" alt="foto" style="max-width: 100px">--}}
{{--                <div class="form-group">--}}

{{--                    <input type="file" name="image" id="image" >--}}

{{--                </div>--}}
{{--                <button class="btn btn-default" type="submit">Добавить</button>--}}
{{--                @isset($path)--}}
{{--                    <img src="{{ asset('/storage/'. $path) }}" class="img-fluid" alt="" style="max-width: 300px">--}}
{{--                @endisset--}}
        <button type="submit" class="btn btn-primary mt-3">Обновить</button>

            </div>

    </form>
@endsection


