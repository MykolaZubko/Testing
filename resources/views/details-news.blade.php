@extends('layout')
@section('title')Новости@endsection

@section('main_content')


        <div class="card mb-4 rounded-3 shadow-sm news-top mt-3 " style="max-width: 406px">
            <div class="card-header py-3 ">
                <img src="{{ asset('/storage/'. $admins->image) }}" alt="foto" style="max-width: 100px">
{{--                <h4 class="my-0 fw-normal ">{{ $el->theme }}</h4>--}}
            </div>
            <div class="card-body news_item">
                <h4 class="card-title pricing-card-title">{{ $admins->title }}</h4>

                <div class="text-left">
                    {{ $admins->short_news }}
                </div>
                <a href="{{ route('home') }}"> <button type="submit" class="btn btn-primary">Назад</button></a>

                <p>Автор: {{ $admins->author }}</p>
            </div>
        </div>


@endsection


