@extends('adminlte::page')

@section('title', 'Usend Поддержка - Заявки')

@section('content_header')
    <h1 class="m-0 text-dark">Роли пользователей</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right small">
                    <a href="{{route('requests.create')}}" type="button" class="btn btn-outline-success btn-sm">Создать роль</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Ключ</th>
                        <th>Дата добавления</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td><a href="#">{{$role->display_name}}</a></td>
                            <td>{{$role->name}}</td>
                            <td>{{$role->created_at}}</td>
                            <td class="text-center"><a href="" class="btn btn-outline-success btn-sm"><i
                                        class="far fa-edit"></i></a><a href="" class="btn btn-outline-danger btn-sm"><i
                                        class="far fa-minus-square"></i></a></td>
                        <tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Ключ</th>
                        <th>Дата добавления</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
