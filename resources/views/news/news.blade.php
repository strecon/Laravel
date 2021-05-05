@extends('layout')

@section('title')
    @parent Categories
@endsection

@section('page_content')
    <h2>{{__('labels.news_h2')}}</h2>
    <br>
    <div class="news-tiles">
        @foreach($categories as $category)
            @php
                $url = route('news::list', ['category' => $category->id]);
                $categoryName = $category->name;
            @endphp
            <div class="news-tile">
                <a href='{{$url}}'>{{$categoryName}}</a>
            </div>
        @endforeach
    </div>
@endsection
