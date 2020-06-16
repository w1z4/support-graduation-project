@extends('adminlte::page')

@section('title', 'Создание пользователя')

@section('content_header')
    <h1 class="m-0 text-dark">Создание пользователя</h1>
@stop

@section('content')
    @if ($errors->any())
        <div class="alert alert-default-secondary alert-dismissible fade show" role="alert">

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            Данные пользователя
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form id="create-user" action="{{route('users.store')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Имя</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Отображаемое имя пользователя">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Пароль</label>
                        <input name="password" type="password" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="card-tools text-md-right">
                        <button form="create-user" type="submit" class="btn btn-outline-success">Сохранить пользователя</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
