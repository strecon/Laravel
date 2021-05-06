@extends('layout')

@section('style_link')
    <link href="../../css/app.css" rel="stylesheet">
@endsection

@section('title')
    @parent Admin Panel -add User
@endsection

@section('page_content')
    <br>
    <h4>{{__('labels.admin_userAdd_h4')}}</h4>
    <br>
    <span><a href="{{route('admin::panel')}}">{{__('labels.admin_userAdd_menu_1')}} ></a><a href="{{route('admin::showUsers')}}">  {{__('labels.admin_userAdd_menu_2')}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <br>
    <br>
    {{--    @include('showErrors')--}}
    <form action="{{route('admin::saveUser')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name"><span style="color: darkred">*</span> {{__('labels.admin_userAdd_name')}}: </label>
            <input type="text" name="name" placeholder="{{__('labels.admin_userAdd_namePlhdr')}}" id="name" class="form-control">
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email"><span style="color: darkred">*</span> {{__('labels.admin_userAdd_email')}}: </label>
            <input type="text" name="email" placeholder="{{__('labels.admin_userAdd_emailPlhdr')}}" id="email" class="form-control">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password"><span style="color: darkred">*</span> {{__('labels.admin_userAdd_password')}}: </label>
            <input type="text" name="password" placeholder="{{__('labels.admin_userAdd_passwordPlhdr')}}" id="email" class="form-control">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="passwordConfirm"><span style="color: darkred">*</span> {{__('labels.admin_userAdd_passwordConfirm')}}: </label>
            <input type="text" name="passwordConfirm" placeholder="{{__('labels.admin_userAdd_passwordConfirmPlhdr')}}" id="passwordConfirm" class="form-control">
            @error('passwordConfirm')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label class="container">
                <input type="checkbox">
                <span class="checkmark">{{__('labels.admin_userAdd_chk')}}</span>
            </label>
            <label class="container">
                <input type="checkbox" checked="">
                <span class="checkmark"><i>will_be_hiden</i></span>
            </label>
        </div>
        <button type="submit" class="btn btn-outline-primary">{{__('labels.admin_userAdd_btn')}}</button>
    </form>
@endsection
