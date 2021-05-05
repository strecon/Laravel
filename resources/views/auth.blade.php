@extends('layout')

@section('title')
    @parent Autorisation
@endsection

@section('page_content')
    <h2>{{__('labels.auth_h2')}}</h2>
    <br>
    <form action="{{route('auth::save')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="login">{{__('labels.auth_login')}}: </label>
            <input type="text" name="login" placeholder="login" id="login" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">{{__('labels.auth_password')}}: </label>
            <input type="text" name="password" placeholder="password" id="password" class="form-control">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" checked="checked" id="remember">
            <label class="form-check-label" for="remember">{{__('labels.auth_remember')}}</label>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">{{__('labels.auth_sign_in')}}</button>
    </form>
    <br><br>
    <p>{{__('labels.auth_forgot')}}</p>
    <p>{{__('labels.auth_regist')}}</p>
@endsection
