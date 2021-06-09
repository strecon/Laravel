@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Category
@endsection


@section('page_content')
    <h2>{{__('labels.news_list_h2')}} {{$category}}</h2>
    <br>
    @foreach($list as $card)
        @php
            $url = route('news::card', ['id' => $card->id]);
        @endphp
            <div class="news_list-item">
                <div class="news_img-small col-xl-1"></div>
                <div class="col-xl-11">
                    <h6>{{$card->title}}</h6>
                    <a href='{{$url}}'>{{$card->content}}</a>
                </div>
            </div>
        <br>
    @endforeach
@endsection
