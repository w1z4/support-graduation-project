@extends('adminlte::page')

@section('title', 'Редактирование приоретета')

@section('content_header')
    <h1 class="m-0 text-dark">Редактирование приоретета - {{$requestsPriority->title}}</h1>
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
            Данные приоретета
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form id="update-priority" action="{{route('requestsPriorities.update',$requestsPriority->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Отображаемое название приоретета" value="{{$requestsPriority->title}}">
                    </div>
                    <div class="card-tools text-md-right">
                        <button form="update-priority" type="submit" class="btn btn-outline-success">Обновить приоретет</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
