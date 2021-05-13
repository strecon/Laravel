@extends('layout')

@section('title')
    @parent Admin Panel
@endsection

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('page_content')

    <span><a href="{{route('admin::panel')}}">{{__('labels.admin_usersList_menu_1')}} ></a><a href="{{route('admin::showUsers')}}">  {{__('labels.admin_usersList_menu_2')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <a href="{{route('admin::addUser')}}"><button type="button" class="btn btn-info">{{__('labels.admin_usersList_add')}}</button></a>
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
                <a href="{{route('admin::addUser', $item->id)}}"><button type="button" class="btn btn-success">{{__('labels.admin_userList_update')}}</button></a>
                &nbsp;&nbsp;&nbsp;
                <br><br>
                <form action="{{route('admin::deleteUser', $item->id)}}" method="post">
                    <input type="hidden" name="_method" value="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-warning">{{__('labels.admin_userList_delete')}}</button>
                </form>
            </div>
        </div>
        <hr>
    @endforeach
    {{$users->links()}}
@endsection
