@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('page_content')
{{--    <p><span><a href="{{ route('admin::addNews') }}">Add news</a></span>--}}
{{--        <span>&nbsp;&nbsp;&nbsp;</span>--}}
{{--        <span><a href="#">Update news</a></span>--}}
{{--        <span>&nbsp;&nbsp;&nbsp;</span>--}}
{{--        <span><a href="#">Delete news</a></span></p>--}}
    <button type="button" class="btn btn-info">Add news</button>
    <hr>
    @foreach($news as $item)
        <div class="news_list-item">
            <div class="news_img-small col-xl-1"></div>
            <div class="col-xl-11">
                <h5>{{$item->title}}</h5>
                <h6>category: {{$item->category}}</h6>
                <p>{{$item->content}}</p>
                <p><small>{{$item->created_at}}</small></p>
                <a href="{{route('admin::addNews', $item->id)}}"><button type="button" class="btn btn-success">Update</button></a>
                &nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-warning">Delete</button>
            </div>
        </div>
        <hr>
    @endforeach
    {{$news->links()}}
@endsection
