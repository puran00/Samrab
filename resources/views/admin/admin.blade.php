@extends('layout.app')
@section('title')
    Админка
@endsection
@section('main')
{{--    <style>--}}
{{--        .card22{--}}
{{--            height: 1080px;--}}
{{--        }--}}

{{--    </style>--}}

    <div class="container">
        <div class="row mt-5 text-center">
            <h2>Админ панель</h2>
        </div>
        <table class="table">
            <thead>
            <tr style="background-color:#cfc0ff">
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $key=>$category)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$category->title}}</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('editCategory', ['category'=>$category])}}" class="btn btn-secondary col-12">Редактировать</a>
                                </div>
                                <div class="col-6">
                                    <form action="{{route('delete',['category'=>$category])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger col-12">Удалить</button>
                                    </form>
                                </div>
                            </div>

                        </td>

                    </tr>
                @endforeach



            </tbody>
        </table>

        <div class="row mt-5 text-center">
            <h2>Редактирование постов</h2>
        </div>

        <div class="row mt-5">
            @foreach($contents as $content)
                <div class="card mb-3 ">
                    <img src="{{asset($content->img)}}" class="card-img-top" alt="..." style="height: 500px; width: 500px">
                    <div class="card-body">
                        <h5 class="card-title">{{$content->title}}</h5>
                        <p class="card-text">{{$content->content}}</p>
                        <p class="card-text"><small class="text-muted"></small></p>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('editContent',['content'=>$content])}}" class="btn btn-secondary col-12">Редактировать</a>
                            </div>
                            <div class="col-6">
                                <form action="{{route('deleteContent', ['content'=>$content])}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger col-12">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
