@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('page_content')
{{--        <span><a href="#">Update news</a></span>--}}
{{--        <span>&nbsp;&nbsp;&nbsp;</span>--}}
{{--        <span><a href="#">Delete news</a></span></p>--}}

    <span><a href="{{route('admin::panel')}}">{{__('labels.admin_newsList_menu_1')}} ></a><a href="{{route('admin::showNews')}}">  {{__('labels.admin_newsList_menu_2')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <a href="{{route('admin::addNews')}}"><button type="button" class="btn btn-info">{{__('labels.admin_newsList_add')}}</button></a>&nbsp;&nbsp;&nbsp;
    <a href="{{route('admin::parser')}}"><button type="button" class="btn btn-info">{{__('labels.admin_newsList_parser')}}</button></a>
    <hr>
    @include('showMessages')
@foreach($news as $item)
        <div class="news_list-item">
            <div class="news_img-small col-xl-1"></div>
            <div class="col-xl-11">
                <h5>{{$item->title}}</h5>
                <h6>category: {{$item->category}}</h6>
                <p>{{$item->content}}</p>
                <p><small>{{$item->created_at}}</small></p>
                <a href="{{route('admin::addNews', $item->id)}}"><button type="button" class="btn btn-success">{{__('labels.admin_newsList_update')}}</button></a>
                &nbsp;&nbsp;&nbsp;
                <br><br>
                <form action="{{route('admin::deleteNews', $item->id)}}" method="post">
                    <input type="hidden" name="_method" value="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-warning">{{__('labels.admin_newsList_delete')}}</button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    {{$news->links()}}
@endsection
