@extends('adminlte::page')
@section('plugins.Datatables', true)

@section('title', 'Usend Поддержка')

{{--@section('content_header')--}}
{{--    <h1 class="m-0 text-dark">Dashboard</h1>--}}
{{--@stop--}}

@section('content')
    <div class="row">
        <div class="col-12">
            @if(isset($requests))
            <div class="card">
                <div class="card-header">
                    Последние обновлённые заявки
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <table id="example" class="table table-striped table-bordered small" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Статус</th>
                                <th>Приоритет</th>
                                <th>Заголовок</th>
                                <th>Автор</th>
                                <th>Ответственный</th>
                                <th>Дата добавления</th>
                                <th>Дата закрытия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{$request->id}}</td>
                                    <td>{{$request->status->title}}</td>
                                    <td>{{$request->priority->title}}</td>
                                    <td>{{$request->title}}</td>
                                    <td>{{$request->creator->name}}</td>
                                    <td>{{($request->responsible)?$request->responsible->name:'не назначен'}}</td>
                                    <td>{{$request->created_at}}</td>
                                    <td>{{$request->closed_at}}</td>
                                <tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Статус</th>
                                <th>Приоритет</th>
                                <th>Заголовок</th>
                                <th>Автор</th>
                                <th>Ответственный</th>
                                <th>Дата добавления</th>
                                <th>Дата закрытия</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@stop

