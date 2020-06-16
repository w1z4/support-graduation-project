@extends('adminlte::page')

@section('title', 'Usend Поддержка - Пользователи')

@section('content_header')
    <h1 class="m-0 text-dark">Пользователи</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    <a type="button" href="{{route('users.create')}}" class="btn btn-outline-success btn-sm">Создать
                        пользователя</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Блокировка</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td @if($user->locked_at)class="text-center alert-dark"@endif>@if($user->locked_at)<i
                                    class="alert-dark fas fa-times"></i>@endif</td>
                            <td class="text-center"><a href="{{route('users.edit',$user->id)}}"
                                                       class="btn btn-outline-success btn-sm"><i
                                        class="far fa-edit"></i></a>
                                @if($user->locked_at)
                                    <a href="{{route('users.unlock',$user->id)}}"
                                       class="btn btn-outline-warning btn-sm"><i
                                            class="far fa-minus-square"></i></a>
                                @else<a href="{{route('users.lock',$user->id)}}"
                                                                       class="btn btn-outline-danger btn-sm"><i
                                        class="far fa-minus-square"></i></a>
                                @endif
                            </td>
                        <tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Блокировка</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
