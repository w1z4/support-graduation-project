@extends('adminlte::page')

@section('title', 'АН Курс')

@section('content_header')
    <h1 class="m-0 text-dark">Договор - 3</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            Основные данные
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
{{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
{{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Дата завержения</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2020-05-07">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Клиент</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Иванов Иван Сергеевич</option>
                            <option>Петров Сергей Иванович</option>
                            <option>Иванчук Алексей Федотович</option>
                            <option>Андропенко Алия Ивановна</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Риэлтор</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>Сердюк Ангелина Ивановна</option>
                            <option>Алёшин Павел Сергеевич</option>
                            <option>Петров Армен Алексеевич</option>
                        </select>
                    </div>
                    <div class="form-group pull-right">
                        <label for="exampleFormControlInput1">Подписан</label>
                        <input type="checkbox" class="form-control" placeholder="name@example.com">
                    </div>

                    <div class="card-tools text-md-right">
                                            <button type="button" class="btn btn-outline-success ">Сохранить договор</button>
                        {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div><div class="card">
        <div class="card-header">
            Условия
            <div class="col-md-12" role="group" aria-label="Basic example">
                <div class="card-tools text-md-right">
                    {{--                    <button type="button" class="btn btn-outline-success ">Добавить</button>--}}
                    {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Цена ₽</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1000000">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Услуга</label>
                        <select multiple class="form-control" id="exampleFormControlSelect1">
                            <option>Аренда</option>
                            <option>Продажа</option>
                            <option>Покупка</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Недвижимость</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>Москва, Мира, дом 2</option>
                            <option>Алёшин Павел Сергеевич</option>
                            <option>Петров Армен Алексеевич</option>
                        </select>
                    </div>

                    <div class="card-tools text-md-right">
                        <button type="button" class="btn btn-outline-success ">Сохранить условия договора</button>
                        {{--                    <button type="button" class="btn btn-outline-dark">Поиск</button>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
