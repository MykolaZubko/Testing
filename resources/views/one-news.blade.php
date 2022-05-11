@extends('layout')
@section('title')Просмотр новости@endsection
@section('main_content')

<div class="alert news-one mt-3">
    <div>
        <div>
            <h4>{{$data->theme}}</h4>
            <h4>{{ $data->title }}</h4>
            <p>{{ $data->news_subject }}</p>
            <img src="{{ asset('/storage/'. $data->image) }}" class="img-fluid mt-3" alt="foto" style="max-width: 300px">
        </div>

        <a href="{{route('update_news', $data->id)}}"> <button type="submit" class="btn btn-primary mt-3" >Редактирование</button></a>
        <a href="{{route('delete_news', $data->id)}}"> <button type="submit" class="btn btn-danger mt-3">Удалить</button></a>
        <p class="mt-5">Автор: <b>{{ $data->author }}</b></p>
    </div>
</div>
@endsection
