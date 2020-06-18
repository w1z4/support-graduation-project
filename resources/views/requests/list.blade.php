@extends('adminlte::page')

@section('title', 'Usend Поддержка - Заявки')

@section('content_header')
    <h1 class="m-0 text-dark">Заявки</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right small">
                    <a href="{{route('usersRequests.create')}}" type="button" class="btn btn-outline-success btn-sm">Создать заявку</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
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
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <td>{{$request->id}}</td>
                            <td>{{$request->status->title}}</td>
                            <td>{{$request->priority->title}}</td>
                            <td><a href="{{route('usersRequests.show',$request->id)}}">{{$request->title}}</a></td>
                            <td>{{$request->creator->name}}</td>
                            <td>{{($request->responsible)?$request->responsible->name:'не назначен'}}</td>
                            <td>{{$request->created_at}}</td>
                            <td>{{$request->closed_at}}</td>
                            <td class="text-center"><a href="{{route('usersRequests.edit',$request->id)}}" class="btn btn-outline-success btn-sm"><i class="far fa-edit"></i></a> </td>
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
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
