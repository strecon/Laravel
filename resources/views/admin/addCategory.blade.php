@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add category
@endsection

@section('page_content')
    <br>
    <h4>{{__('labels.admin_categAdd_h2')}} {{$id}}</h4>
    <br>
    <span><a href="{{route('admin::panel')}}">{{__('labels.admin_categAdd_menu_1')}} ></a><a href="{{route('admin::showCategories')}}">  {{__('labels.admin_categAdd_menu_2')}}</a></span>
    <br><br>
    @include('showErrors')
    <form action="{{route('admin::saveCategory', ['id' => $id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name"><span style="color: darkred">*</span> {{__('labels.admin_categAdd_name')}}: </label>
            <input type="text" name="name" placeholder="{{__('labels.admin_categAdd_namePlhdr')}}" id="title" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-primary">{{__('labels.admin_categAdd_btn')}}</button>
    </form>
@endsection
