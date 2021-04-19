@extends('layout')

@section('title')
    @parent Autorisation
@endsection

@section('page_content')
    <h2>Autorisation</h2>
    <br>
    <form action="{{route('auth-save')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="login">login: </label>
            <input type="text" name="login" placeholder="login" id="login" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">password: </label>
            <input type="text" name="password" placeholder="password" id="password" class="form-control">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" checked="checked" id="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Sign In</button>
    </form>
    <br><br>
    <p>forgot password?</p>
    <p>registration</p>
@endsection
