@extends('adminlte::page')

@section('title', 'АН Курс')

@section('content_header')
    <h1 class="m-0 text-dark">Новая заявка</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Данные заявки
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form action="{{route('usersRequests.store')}}" id="request-create" method="post">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="id_status">Статус заявки</label>
                        <select class="form-control" id="id_status" name="id_status">
                            @foreach($requestStatuses as $status)
                            <option value="{{$status->id}}">{{$status->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_status">Приоритет заявки</label>
                        <select class="form-control" id="id_status" name="id_priority">
                            @foreach($requestsPriorities as $priority)
                            <option value="{{$priority->id}}">{{$priority->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title"
                               placeholder="Заголовок заявки (краткое и ёмкое описание)" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Описание заявки</label>
                        <textarea required class="form-control" name="description" id="description"
                                  placeholder="Основное описание заявки"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="closed_at">Дата закрытия</label>
                        <input type="datetime-local" class="form-control" id="closed_at" name="closed_at"
                               placeholder="2020-06-05 04:04:32">
                    </div>
                    <div class="card-tools text-md-right">
                        <button form="request-create" type="submit" class="btn btn-outline-success btn-sm">Добавить
                            заявку
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
