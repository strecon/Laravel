@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('page_content')

    <span><a href="{{route('admin::panel')}}">{{__('labels.admin_usersList_menu_1')}} ></a><a href="{{route('admin::showUsers')}}">  {{__('labels.admin_usersList_menu_2')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <hr>
    @include('showMessages')
    @foreach($users as $item)
        <div class="news_list-item">
            <div class="news_img-small col-xl-1"></div>
            <div class="col-xl-11">
                <h5>{{$item->name}}</h5>
                <h6>e-mail: {{$item->email}}</h6>
{{--                <p>{{__('labels.admin_userList_group')}}: {{$item->is_admin}}</p>--}}
                <p>{{__('labels.admin_userList_group')}}: </p>
                <p><small>{{$item->created_at}}</small></p>
                <a href="#"><button type="button" class="btn btn-success">{{__('labels.admin_userList_update')}}</button></a>
                &nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-warning">{{__('labels.admin_userList_delete')}}</button>
            </div>
        </div>
        <hr>
    @endforeach
    {{$users->links()}}
@endsection
