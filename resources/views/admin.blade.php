@extends('layout')
@section('title')Администрация@endsection

@section('main_content')

    <h1>Форма добавления футбольной новости</h1>

    <div class="container">
        @include('messages')
    </div>

    <form method="post" action="{{route('admin_check')}}" enctype="multipart/form-data">
        @csrf
        <h6>Тема раздела</h6>
        <input type="text" name="theme"  id="theme" placeholder="Введите тему раздела" class="form-control mb-2">
        <h6>Заголовок статьи</h6>
        <input type="text" name="title"  id="title" placeholder="Введите название новости" class="form-control mb-2">
        <h6>Краткий обзор</h6>
        <input type="text" name="short_news"  id="short_news" placeholder="Тезисно о новости" class="form-control mb-2">
        <h6>Имя автора</h6>
        <input type="text" name="author"  id="author" placeholder="Введите имя автора" class="form-control mb-2">
        <h6>Новость</h6>
        <textarea name="news_subject" id="news_subject" class="form-control mb-2" placeholder="Введите новость"></textarea>
        <h6>Добавление изображения</h6>
{{--        <form class="text-dark" action="{{ route('upload_image') }}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
            <div class="form-group">
                <input type="file" name="image" id="image" style="height: 200px; background: #4a5568">
                @isset($path)
                    <img src="{{ asset('/storage/'. $path) }}" class="img-fluid" alt="" style="max-width: 300px">
                @endisset
            </div>
{{--            <button class="btn btn-default" type="submit">Добавить</button>--}}
{{--        </form>--}}
        @isset($path)
            <img src="{{ asset('/storage/'. $path) }}" class="img-fluid" alt="" style="max-width: 300px">
        @endisset
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <h1 class="mt-5">Все отзывы</h1>
    @foreach($admins as $el)

        <div class="alert alert-success">
            <div>
                <h4>{{ $el->theme }}</h4>
                <h4>{{ $el->title }}</h4>
                <b>{{ $el->author }}</b>
                <img src="{{ asset('/storage/'. $el->image) }}" alt="foto" style="max-width: 100px">
                <a href="{{route('show_news', $el->id)}}"> <button type="submit" class="btn btn-primary">Детальнее</button></a>


            </div>
        <div>
        </div>
        </div>


    @endforeach
@endsection

