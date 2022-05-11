@extends('layout')
@section('title')Главная страница@endsection
@section('main_content')

    <div class="row row-cols-1 mb-3 text-center ">
        <div class="container ">
            @include('news')
{{--            @yield('news_content')--}}
        </div>
{{--        <h1 class="mt-5">Все отзывы</h1>--}}
{{--            @foreach($admin as $el)--}}
{{--                <div class="alert alert-success">--}}
{{--                    <h4>{{ $el->title }}</h4>--}}
{{--                    <b>{{ $el->author }}</b>--}}
{{--                    <p>{{ $el->news_subject }}</p>--}}
{{--                </div>--}}

{{--            @endforeach--}}

    </div>



@endsection
