@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('page_content')
    <span><a href="{{route('admin::panel')}}">Admin panel ></a><a href="{{route('admin::showCategories')}}">  categories list</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <a href="{{route('admin::addCategory') }}"><button type="button" class="btn btn-info">Add category</button></a>
    <hr>
    @include('showMessages')
    @foreach($category as $item)
        <div class="news_list-item">
            <div class="news_img-small col-xl-1"></div>
            <div class="col-xl-11">
                <h6>category id: {{$item->id}}</h6>
                <p>{{$item->name}}</p>
                <p><small>{{$item->created_at}}</small></p>
                <a href="{{route('admin::addCategory', $item->id)}}"><button type="button" class="btn btn-success">Update</button></a>
                &nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-warning">Delete</button>
            </div>
        </div>
        <hr>
    @endforeach
    {{$category->links()}}
@endsection
