@extends('layout.app')
@section('title')
    Авторизация
@endsection
@section('main')
    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Авторизация</h2>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-6" >
                <form action="" method="post">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control" id="login">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary col-12" style="background-color:#cfc0ff; color:#F4F1FF; border: none">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
