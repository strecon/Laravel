@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent newsCard
@endsection

@section('page_content')
    <br>
    <span><a href="{{route('news::categories')}}">{{__('labels.newsList_menu_1')}} ></a><a href="{{redirect()->back()}}">  {{__('labels.newsList_menu_2')}} {{$news->category}}</a></span>
    <br>
    <br>
    <h3>{{$news->title}}</h3>
    <br>
    <article>
        <div class="news_img">
            <img src="{{$news->img}}" alt="no image">
        </div>
        <br>
        <div>
            <p>{{$news->content}}</p>
        </div>
    </article>
    <br>
    <br>
@endsection
