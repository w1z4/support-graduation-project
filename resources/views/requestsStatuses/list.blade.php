@extends('adminlte::page')

@section('title', 'Usend Поддержка - Статусы заявок')

@section('content_header')
    <h1 class="m-0 text-dark">Статусы заявок</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    <a href="{{route('requestsStatuses.create')}}" type="button" class="btn btn-outline-success btn-sm">Создать статус</a>
                </div>
            </div>
        </div>
        <form id="del-status" method="post">@csrf @method('delete')</form>
        <div class="card-body">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название статуса</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($requestsStatuses as $requestsStatus)
                        <tr>
                            <td>{{$requestsStatus->id}}</td>
                            <td><a href="{{route('requestsStatuses.edit',$requestsStatus->id)}}">{{$requestsStatus->title}}</a>
                            </td>
                            <td class="text-center"><a href="{{route('requestsStatuses.edit',$requestsStatus->id)}}"
                                                       class="btn btn-outline-success btn-sm"><i
                                        class="far fa-edit"></i></a>
                                <button form="del-status" formaction="{{route('requestsStatuses.destroy',$requestsStatus->id)}}"
                                        class="btn btn-outline-danger btn-sm"><i
                                        class="far fa-minus-square"></i></button>
                            </td>
                        <tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Название статуса</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
