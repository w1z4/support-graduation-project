@extends('adminlte::page')

@section('title', 'Usend Поддержка - Роли пользователей')

@section('content_header')
    <h1 class="m-0 text-dark">Роли пользователей</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right small">
                    <a href="{{route('roles.create')}}" type="button" class="btn btn-outline-success btn-sm">Создать
                        роль</a>
                </div>
            </div>
        </div>
        <form id="del-role" method="post">@csrf @method('delete')</form>
        <div class="card-body">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Дата добавления</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td><a href="{{route('roles.edit',$role->id)}}">{{$role->title}}</a></td>
                            <td>{{$role->created_at}}</td>
                            <td class="text-center"><a href="{{route('roles.edit',$role->id)}}"
                                                       class="btn btn-outline-success btn-sm"><i
                                        class="far fa-edit"></i>
                                </a>
                                <button form="del-role" formaction="{{route('roles.destroy',$role->id)}}"
                                        class="btn btn-outline-danger btn-sm"><i
                                        class="far fa-minus-square"></i></button>
                            </td>
                        <tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th>Дата добавления</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
