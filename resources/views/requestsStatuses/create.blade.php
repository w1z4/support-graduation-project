@extends('adminlte::page')

@section('title', 'Создание статуса')

@section('content_header')
    <h1 class="m-0 text-dark">Создание статуса</h1>
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
            Данные статуса
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form id="create-status" action="{{route('requestsStatuses.store')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Отображаемое название статуса">
                    </div>
                    <div class="card-tools text-md-right">
                        <button form="create-status" type="submit" class="btn btn-outline-success">Сохранить статус</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
