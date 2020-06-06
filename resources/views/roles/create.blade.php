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
                <form action="{{route('requests.store')}}" method="post">
                    <div class="form-group">
                        <label for="id_status">Статус заявки</label>
                        <select class="form-control" id="id_status" name="id_status">
                            <option value="1">Новая</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_status">Приоритет заявки</label>
                        <select class="form-control" id="id_status" name="id_status">
                            <option value="3">Высокий</option>
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
                    @role('admin')

                    <div class="form-group">
                        <label for="closed_at">Дата закрытия</label>
                        <input type="datetime-local" class="form-control" id="closed_at" name="closed_at"
                               placeholder="2020-06-05 04:04:32" required>
                    </div>
                    @endrole
                    <div class="card-tools text-md-right">
                        <button type="submit" class="btn btn-outline-success ">Отправить заявку</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
