@extends('adminlte::page')

@section('title', 'АН Курс')

@section('content_header')
    <h1 class="m-0 text-dark">Заявка #{{$request->id}}</h1>
@stop

@section('content')
    <div class="card alert-light">
        <div class="card-header">
            {{$request->title}}

            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    <a href="{{route('requests.edit',[$request->id])}}" type="button" class="btn btn-outline-success btn-sm">Редактировать</a>
                    <button type="button" class="btn btn-outline-danger btn-sm">Закрыть</button>
                </div>
            </div>
        </div>

        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
            <p type="button" class="btn btn-outline-secondary btn-sm">{{$request->status->title}}</p>
            <p type="button" class="btn btn-outline-secondary btn-sm">{{$request->priority->title}}</p>
        </div>
        <div class="card-body">
            <p class="jumbotron">{{$request->description}}</p>
        </div>
    </div>
    @foreach($request->comments as $comment)
        <div class="alert alert-secondary">
            {{$comment->created_at}}: <strong>{{$comment->author->name}}</strong>
            <hr>
            {{$comment->comment}}
        </div>
    @endforeach

    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <textarea type="email" class="form-control" id="comment" placeholder="Комментарий к заявке"></textarea>
                    </div>
                </form>

                <div class="card-tools text-md-right">
                    <button type="submit" class="btn btn-outline-secondary btn-sm">Отправить комментарий</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
