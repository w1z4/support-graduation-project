@extends('adminlte::page')

@section('title', 'АН Курс')

@section('content_header')
    <h1 class="m-0 text-dark">Недвижимость</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    <button type="button" class="btn btn-outline-success ">Добавить</button>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Тип</th>
                        <th>Дата завершения</th>
                        <th>Цена</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($realEstate as $one)
                        <tr>
                            <td><a href="#">{{$one->id}}</a></td>
                            @php
                                $rand=rand(1,999);
                            if($rand%2==0){$type="Аренда";}elseif($rand%3===0){$type="Продажа";}else{$type="Покупка";}
                            @endphp
                            <td>{{$type}}</td>
                            <td>{{$one->date_end}}</td>
                            <td>{{rand(100000,3000000)}}₽</td>
                        <td> @if ($one->signed)
                                <span class="col-3 badge badge-success">Подписан</span>
                            @endif
                        <tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Тип</th>
                        <th>Дата завершения</th>
                        <th>Цена</th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@stop
