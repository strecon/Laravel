@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add News
@endsection

@section('page_content')
    <br>
    <h4>{{__('labels.admin_newsAdd_h4')}}</h4>
    <br>
    <span><a href="{{route('admin::panel')}}">{{__('labels.admin_newsAdd_menu_1')}} ></a><a href="{{route('admin::showNews')}}">  {{__('labels.admin_newsAdd_menu_2')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <br>
    <br>
{{--    @include('showErrors')--}}
    <form action="{{route('admin::saveNews')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="category"><span style="color: darkred">*</span> {{__('labels.admin_newsAdd_category')}}: </label>
            <input type="text" name="category" placeholder="{{__('labels.admin_newsAdd_categPlhdr')}}" id="category" class="form-control">
            @error('category')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title"><span style="color: darkred">*</span> {{__('labels.admin_newsAdd_title')}}: </label>
            <input type="text" name="title" placeholder="{{__('labels.admin_newsAdd_titlePlhdr')}}" id="title" class="form-control">
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
{{--        <div class="input-group mb-3">--}}
{{--            <input type="file" class="form-control" id="inputGroupFile02">--}}
{{--            <label class="input-group-text" for="inputGroupFile02">attach</label>--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="content"><span style="color: darkred">*</span> {{__('labels.admin_newsAdd_content')}}: </label>
            <textarea name="content" placeholder="{{__('labels.admin_newsAdd_contentPlhdr')}}" id="content"  class="form-control"></textarea>
            @error('content')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-primary">{{__('labels.admin_newsAdd_btn')}}</button>
    </form>
@endsection
