@extends('layout')

@section('title')
    @parent fromDB
@endsection

@section('page_content')
    <h2>News from DB</h2>
    <br>
    <div class="news-tiles">
{{--        @foreach($categories as $id => $category)--}}
{{--            <h4>{{$category}}</h4>--}}
{{--        @endforeach--}}
        <br>
            @foreach($list as $id => $card)
                <div class="news_list-item">
                    <div class="col-xl-11">
                        <br><i>{{$card['name']}}</i>
                        <br><b>{{$card['title']}}</b>
                        <br>{{$card['content']}}
                    </div>
                </div>
                <br>
            @endforeach
    </div>
@endsection
