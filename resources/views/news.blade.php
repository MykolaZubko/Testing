@extends('layout')

@section('main_content')

    <div class="col-12 d-flex">
        @foreach($admins as $el)
        <div class="card mb-4 rounded-3 shadow-sm news-top mt-3 " style="max-width: 406px; width: 100%; margin-right: 5px">
            <div class="card-header py-3" style="min-height: 500px">
                <h4 class="my-0 fw-normal ">{{ $el->theme }}</h4>
                <img src="{{ asset('/storage/'. $el->image) }}" class="img-fluid mt-3" alt="foto" style="max-width: 500px; width: 100%; height: 100%; max-height: 400px">
            </div>
            <div class="card-body news_item">
                <h4 class="card-title pricing-card-title">{{ $el->title }}</h4>
                <div class="text-left">
                    {{ $el->short_news }}
                </div>
                <a href="{{route('details', $el->id)}}"> <button type="submit" class="btn btn-primary">Подробнее...</button></a>
               <p>Автор: {{ $el->author }}</p>
            </div>
        </div>
            @endforeach
        <div class="pagination_top">
            {{ $admins->links() }}
        </div>
    </div>

@endsection
