@extends('adminlte::page')

@section('title', 'АН Курс')

@section('content_header')
    <h1 class="m-0 text-dark">Пользователь - {{$user->name}}</h1>
@stop

@section('content')
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
        <div class="card-body">
            <div class="col-12">
                <form action="{{route('users.update',$user->id)}}" id="update-user" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Имя</label>
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Отображаемое имя пользователя" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                               value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Новый пароль</label>
                        <input name="password" type="password" class="form-control" id="exampleFormControlInput1"
                               placeholder="Введите новый пароль или оставить пустым">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Блоировка</label>
                        <input name="locked_at" type="checkbox"
                               {{($user->locked_at)?'checked':''}} id="exampleFormControlInput1"
                               placeholder="Новый пароль или оставить пустым">
                        @if($user->locked_at)
                            <p class="alert-danger">Дата блокировки: {{$user->locked_at}}</p>
                        @endif
                    </div>

                    <div class="card-tools text-md-right">
                        <button form="update-user" type="submit" class="btn btn-outline-success">Сохранить
                            пользователя
                        </button>
                        {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Роли пользователя
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        @if(!empty($roles))
            <div class="card-body">
                <div class="col-12">
                    <form action="{{route('users.permissions.update',$user->id)}}" id="user-permissions-update"
                          method="post">
                        @csrf
                        @method('put')
                        <div class="flex flex-wrap justify-start mb-4">
                            @foreach($roles as $role)
                                <label class="inline-flex items-center mr-6 my-2 text-sm " style="flex: 1 0 20%;">
                                    <input {{!empty($user->ids->roles)&&in_array($role->id,$user->ids_roles)?'checked':''}} type="checkbox" class="form-checkbox h-4 w-4" name="roles[]"
                                           value="{{$role->id}}">
                                    <span class="ml-2">
                {{$role->title}}
              </span>
                                </label>
                            @endforeach
                        </div>
                        <div class="card-tools text-md-right">
                            <button form="user-permissions-update" type="submit" class="btn btn-outline-success ">
                                Сохранить
                                права пользователя
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endif
    </div>
@stop
